<!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                <th class="min-w-125px">Nombre</th>
                <th class="min-w-125px">Descripcion</th>
                <th class="min-w-125px">Estado</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($r->nombre); ?></a>
                        </div>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($r->descripcion); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($r->estado); ?></a>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-warning btn-icon btn-sm"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-icon btn-sm" onclick="eliminar('<?php echo e($r->id); ?>')"><i class="fa fa-trash"></i></button>
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
<?php /**PATH C:\laragon\www\bufet\resources\views/rol/ajaxListado.blade.php ENDPATH**/ ?>