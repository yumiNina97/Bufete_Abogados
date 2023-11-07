<!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-100px">Nombre</th>
                <th class="min-w-100px">Ap Paterno</th>
                <th class="min-w-100px">Ap Materno</th>
                <th class="min-w-100px">Cedula</th>
                <th class="min-w-200px"></th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            <?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($c->nombres); ?></a>
                        </div>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($c->ap_paterno); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($c->ap_materno); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($c->cedula); ?></a>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="required fw-semibold fs-6 mb-2" for="">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fecha_ini_<?php echo e($c->id); ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="required fw-semibold fs-6 mb-2" for="">Fecha Fin</label>
                                <input type="date" class="form-control" id="fecha_fin_<?php echo e($c->id); ?>">
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                        
                        
                        <button class="btn btn-info btn-icon btn-sm" onclick="generaReporteCliente('<?php echo e($c->id); ?>')" target="_blank" title="PROCESOS"><i class="fa fa-list"></i></button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h4 class="text-danger text-center">Sin registros</h4>
            <?php endif; ?>


        </tbody>
    </table>
<!--end::Table-->
    <script>
        $('#kt_table_users1').DataTable({
            
        });
    </script>
<?php /**PATH C:\laragon\www\bufet\resources\views/reporte/ajaxListadoCliente.blade.php ENDPATH**/ ?>