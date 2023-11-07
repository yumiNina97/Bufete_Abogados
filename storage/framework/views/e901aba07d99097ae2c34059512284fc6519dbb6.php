<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('metadatos'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <h3>REPORTE POR TIPO</h3>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="required fw-semibold fs-6 mb-2" for="">Fecha Inicio</label>
                            <input type="date" class="form-control" id="trami_fecha_ini">
                        </div>
                        <div class="col-md-6">
                            <label class="required fw-semibold fs-6 mb-2" for="">Fecha Inicio</label>
                            <input type="date" class="form-control" id="trami_fecha_fin">
                        </div>
                    </div>
                    <a class="btn btn-dark w-100 mt-2" onclick="generaReporTramite()">TRAMITE</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="required fw-semibold fs-6 mb-2" for="">Fecha Inicio</label>
                            <input type="date" class="form-control" id="proce_fecha_ini">
                        </div>
                        <div class="col-md-6">
                            <label class="required fw-semibold fs-6 mb-2" for="">Fecha Inicio</label>
                            <input type="date" class="form-control" id="proce_fecha_fin">
                        </div>
                    </div>
                    <a class="btn btn-info w-100 mt-2" onclick="generaReporProces()">PROCESO</a>
                </div>
            </div>
            
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    <hr>

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <h3>REPORTE POR CLIENTE</h3>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Cedula</label>
                    <input type="text" class="form-control busca" id="busca_cedula">
                </div>
                <div class="col-md-3">
                    <label for="">Ap Paterno</label>
                    <input type="text" class="form-control busca" id="busca_paterno">
                </div>
                <div class="col-md-3">
                    <label for="">Ap Materno</label>
                    <input type="text" class="form-control busca" id="busca_materno">
                </div>
                <div class="col-md-3">
                    <label for="">Nombres</label>
                    <input type="text" class="form-control busca" id="busca_nombre">
                </div>
            </div>
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

            $('.busca').keyup(function(){
                var busca_cedula    = $('#busca_cedula').val();
                var busca_paterno   = $('#busca_paterno').val();
                var busca_materno   = $('#busca_materno').val();
                var busca_nombre    = $('#busca_nombre').val();
                $.ajax({
                    url: "<?php echo e(url('reporte/buscaCliente')); ?>",
                    data:{
                        busca_cedula:   busca_cedula,
                        busca_paterno:  busca_paterno,
                        busca_materno:  busca_materno,
                        busca_nombre:   busca_nombre
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        if(data.estado === 'success')
                            $('#table_roles').html(data.listado);
                    }
                });
            })
        });

       function guardarVenta(){
            if($("#formularioRol")[0].checkValidity()){
                datos = $("#formularioRol").serializeArray()
                $.ajax({
                    url: "<?php echo e(url('rol/guarda')); ?>",
                    data:datos,
                    type: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        if(data.estado === 'success')
                            $('#table_roles').html(data.listado);
                    }
                });
            }else{
    			$("#formularioRol")[0].reportValidity()
            }
        }

        function ajaxListado(){
            $.ajax({
                url: "<?php echo e(url('reporte/ajaxListadoCliente')); ?>",
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_roles').html(data.listado);
                }
            });
        }

        function eliminar(rol){
            $.ajax({
                url: "<?php echo e(url('rol/eliminar')); ?>",
                type: 'POST',
                data:{id:rol},
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_roles').html(data.listado);
                }
            });
        }

        function generaReporTramite(){
            var fecha_ini = $('#trami_fecha_ini').val();
            var fecha_fin = $('#trami_fecha_fin').val();

            if(!(fecha_ini == '' || fecha_fin == '')){
                var url = "<?php echo e(url('reporte/generaPdfTramite')); ?>/"+fecha_ini+"/"+fecha_fin;
                window.location.href = url;
            }
        }

        function generaReporProces(){
            var fecha_ini = $('#proce_fecha_ini').val();
            var fecha_fin = $('#proce_fecha_fin').val();

            if(!(fecha_ini == '' || fecha_fin == '')){
                var url = "<?php echo e(url('reporte/generaPdfTramite')); ?>/"+fecha_ini+"/"+fecha_fin;
                window.location.href = url;
            }

        }

        function generaReporteCliente(id){
            var fecha_ini = $('#fecha_ini_'+id).val();
            var fecha_fin = $('#fecha_fin_'+id).val();

            if(!(fecha_ini == '' || fecha_fin == '')){
                var url = "<?php echo e(url('reporte/generaPdf')); ?>/"+id+"/"+fecha_ini+"/"+fecha_fin;
                window.location.href = url;
            }
        }
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bufet\resources\views/reporte/listado.blade.php ENDPATH**/ ?>