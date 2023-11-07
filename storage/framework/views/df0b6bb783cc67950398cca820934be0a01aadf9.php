<!--begin::Table-->
    <input type="hidden" id="proceso_id_archivos" value="<?php echo e($proceso_id); ?>">
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">Nombre</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            <?php $__empty_1 = true; $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($a->nombre); ?></a>
                    </td>
                    <td class="text-end">
                        <a href='<?php echo e(url("archivoProceso/$a->nombre")); ?>' download class="mb-1 btn btn-success btn-sm btn-icon"> <i class="fa fa-download"></i></a>
                        <button class="btn btn-danger btn-icon btn-sm" onclick="eliminarArchivo('<?php echo e($a->id); ?>', '<?php echo e($a->documento_id); ?>')"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h4 class="text-danger text-center">Sin Archivos</h4>
            <?php endif; ?>
        </tbody>
    </table>
<!--end::Table-->
    <script>
        $('#kt_table_users1').DataTable({
            
        });
    </script>
<?php /**PATH C:\laragon\www\bufet\resources\views/proceso/ajaxListadoArchivo.blade.php ENDPATH**/ ?>