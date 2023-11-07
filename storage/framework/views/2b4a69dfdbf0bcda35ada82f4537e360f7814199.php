<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('metadatos'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!--begin::Modal - Add task-->
    <div class="modal fade" id="modal_permisos" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Formulario de usuario</h2>
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
                    <div id="permios">

                    </div>
                </div>
                <div class="modal-footer scroll-y mx-5 mx-xl-15 my-7">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success" onclick="guardarPermisos()">Guardar</button>
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

    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Formulario de usuario</h2>
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

                    <form id="formularioUsuario">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Nombre</label>
                                    <input type="text" class="form-control form-control-solid" required name="nombres" id="nombres" placeholder="Joel Jonathan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Ap. Paterno</label>
                                    <input type="text" class="form-control form-control-solid" required name="ap_paterno" id="ap_paterno" placeholder="Flores">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Ap. Materno</label>
                                    <input type="text" class="form-control form-control-solid" required name="ap_materno" id="ap_materno" placeholder="Quispe">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Cedula</label>
                                    <input type="number" name="cedula" id="cedula" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="8401524" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Correo</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-solid mb-3 mb-lg-0" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Rol</label>
                                    <select name="rol_id" id="rol_id" class="form-control form-control-solid" required>
                                        <option value="">Seleccione</option>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($r->id); ?>"><?php echo e($r->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Direccion</label>
                                    <input type="text" name="direccion" id="direccion" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="AV. Pabom" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-solid mb-3 mb-lg-0" required/>
                                </div>
                            </div>

                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success w-100" onclick="guardarUsuario()">Guardar</button>
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
            <h3>LISTADO DE USUARIOS</h3>

            <!--begin::Card title-->
            
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                    <i class="ki-duotone ki-plus fs-2"></i>Nueva Usuario</button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                </div>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <div id="table_users">

            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>

    

    <script>
        $.ajaxSetup({
            // definimos cabecera donde estarra el token y poder hacer nuestras operaciones de put,post...
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $( document ).ready(function() {
            ajaxListado();
        });

        function ajaxListado(){
            $.ajax({
                url: "<?php echo e(url('user/ajaxListado')); ?>",
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_users').html(data.listado);
                }
            });
        }

       function guardarUsuario(){
            if($("#formularioUsuario")[0].checkValidity()){
                datos = $("#formularioUsuario").serializeArray()
                $.ajax({
                    url: "<?php echo e(url('user/guarda')); ?>",
                    data:datos,
                    type: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)

                        if(data.estado === 'success')
                            $('#table_users').html(data.listado);
                    }
                });
            }else{
    			$("#formularioUsuario")[0].reportValidity()
            }
        }

        function modalPermisos(usuario){

            $.ajax({
                url: "<?php echo e(url('user/ajaxPermisos')); ?>",
                data:{
                    id:usuario
                },
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#permios').html(data.permisos);
                }
            });

            $('#modal_permisos').modal('show');
        }

        function guardarPermisos(){
            var arry = []
            var usuario = $('#usuario_id').val();
            var valores = document.querySelectorAll('input[name="permisos[]"]:checked');
            for(var  i = 0; i < valores.length; i++){
                arry.push(valores[i].value);
            }
            $.ajax({
                url: "<?php echo e(url('user/ajaxGuardaPermisos')); ?>",
                data:{
                    datos:arry,
                    usuario:usuario
                },
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#permios').html(data.permisos);
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bufet\resources\views/user/listado.blade.php ENDPATH**/ ?>