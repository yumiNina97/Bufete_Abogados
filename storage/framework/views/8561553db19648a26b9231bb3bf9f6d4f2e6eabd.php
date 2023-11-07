<!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">Nombre</th>
                <th class="min-w-125px">Ap Paterno</th>
                <th class="min-w-125px">Ap Materno</th>
                <th class="min-w-125px">Cedula</th>
                <th class="min-w-125px">Telefonos</th>
                <th class="min-w-125px">Direccion</th>
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
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($c->telefonos); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($c->direccion); ?></a>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-warning btn-icon btn-sm" onclick="editar('<?php echo e($c->id); ?>', '<?php echo e($c->nombres); ?>', '<?php echo e($c->ap_paterno); ?>', '<?php echo e($c->ap_materno); ?>', '<?php echo e($c->cedula); ?>', '<?php echo e($c->telefonos); ?>', '<?php echo e($c->correo); ?>', '<?php echo e($c->direccion); ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-icon btn-sm" onclick="eliminar('<?php echo e($c->id); ?>')"><i class="fa fa-trash"></i></button>
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
<?php /**PATH C:\laragon\www\bufet\resources\views/cliente/ajaxListado.blade.php ENDPATH**/ ?>