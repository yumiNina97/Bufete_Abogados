<!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">Nombre</th>
                <th class="min-w-125px">Descripcion</th>
                <th class="min-w-125px">Tipo</th>
                <th class="min-w-125px">Fecha</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            <?php $__empty_1 = true; $__currentLoopData = $procesos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($p->nombre); ?></a>
                        </div>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($p->descripcion); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($p->tipo); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($p->fecha_cita); ?></a>
                    </td>
                    <td class="text-end">
                        <button class="mb-1 btn btn-info btn-sm btn-icon" onclick="verArchivo('<?php echo e($p->id); ?>','<?php echo e($p->nombre); ?>')"> <i class="fa fa-file"></i></button>
                        <button class="btn btn-warning btn-icon btn-sm" onclick="editar('<?php echo e($p->id); ?>', '<?php echo e($p->nombre); ?>', '<?php echo e($p->descripcion); ?>', '<?php echo e($p->tipo); ?>', '<?php echo e($p->estado); ?>', '<?php echo e($p->personas); ?>', '<?php echo e($p->fecha_cita); ?>', '<?php echo e($p->cliente_id); ?>', '<?php echo e($p->posicion); ?>', '<?php echo e($p->contra_demanda); ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-icon btn-sm" onclick="eliminar('<?php echo e($p->id); ?>')"><i class="fa fa-trash"></i></button>
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
<?php /**PATH C:\laragon\www\bufet\resources\views/proceso/ajaxListado.blade.php ENDPATH**/ ?>