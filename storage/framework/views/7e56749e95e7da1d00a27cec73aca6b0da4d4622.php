<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('metadatos'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!--end::Modal - New Card-->
    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Formulario de cliente</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                    <form id="formularioRol">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Nombres</label>
                                    <input type="text" id="nombres" name="nombres" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[a-zA-Z\s]{4,}" title="El nombre debe contener solo letras y al menos cuatro caracteres" required>
                                    <input type="hidden" value="0" id="cliente_id" name="cliente_id">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Ap Paterno</label>
                                    <input type="text" id="ap_paterno" name="ap_paterno" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[a-zA-Z]{4,}" title="El apellido debe contener solo letras y al menos cuatro caracteres" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Ap Materno</label>
                                    <input type="text" id="ap_materno" name="ap_materno" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[a-zA-Z]{4,}" title="El apellido debe contener solo letras y al menos cuatro caracteres" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Cedula</label>
                                    <input type="text" id="cedula" name="cedula" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[0-9]{7,}" title="La cedula debe contener solo numeros y mayor a 7 digitos" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Telefonos</label>
                                    <input type="number" id="telefono" name="telefono" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[0-9]{7,}" title="El telefono debe contener solo numeros y mayor a 7 digitos" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Correo</label>
                                    <input type="email" id="correo" name="correo" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Direccion</label>
                                    <input type="text" id="direccion" name="direccion" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success w-100" onclick="guardarCliente()">Guardar</button>
                        </div>
                    </div>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->


    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <h3>LISTADO DE CLIENTES</h3>

            <!--begin::Card title-->
            
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    
                    
                    <button type="button" class="btn btn-primary" onclick="nuevo()">
                    <i class="ki-duotone ki-plus fs-2"></i>Nuevo Cliente</button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                </div>
                <!--end::Group actions-->
                <!--begin::Modal - Adjust Balance-->
                
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <div id="table_roles">

            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>

    
    
    
    

    <script type="text/javascript">

        $.ajaxSetup({
            // definimos cabecera donde estarra el token y poder hacer nuestras operaciones de put,post...
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $( document ).ready(function() {
            ajaxListado();
        });

       function guardarCliente(){
            if($("#formularioRol")[0].checkValidity()){
                datos = $("#formularioRol").serializeArray()
                $.ajax({
                    url: "<?php echo e(url('cliente/guarda')); ?>",
                    data:datos,
                    type: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        if(data.estado === 'success'){
                            $('#table_roles').html(data.listado);
                            $('#kt_modal_add_user').modal('hide');
                        }
                    }
                });
            }else{
    			$("#formularioRol")[0].reportValidity()
            }
        }

        function ajaxListado(){
            $.ajax({
                url: "<?php echo e(url('cliente/ajaxListado')); ?>",
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_roles').html(data.listado);
                }
            });
        }

        function eliminar(cliente){
            $.ajax({
                url: "<?php echo e(url('cliente/eliminar')); ?>",
                type: 'POST',
                data:{id:cliente},
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_roles').html(data.listado);
                }
            });
        }

        function editar(cliente, nombre, ap, am, cedula, tel, coreo, dir){
            $('#cliente_id').val(cliente)
            $('#nombres').val(nombre)
            $('#ap_paterno').val(ap)
            $('#ap_materno').val(am)
            $('#cedula').val(cedula)
            $('#telefono').val(tel)
            $('#correo').val(coreo)
            $('#direccion').val(dir)

            $('#kt_modal_add_user').modal('show');
        }

        function nuevo(){
            $('#cliente_id').val('0')
            $('#nombres').val('')
            $('#ap_paterno').val('')
            $('#ap_materno').val('')
            $('#cedula').val('')
            $('#telefono').val('')
            $('#correo').val('')
            $('#direccion').val('')

            $('#kt_modal_add_user').modal('show');
        }
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bufet\resources\views/cliente/listado.blade.php ENDPATH**/ ?>