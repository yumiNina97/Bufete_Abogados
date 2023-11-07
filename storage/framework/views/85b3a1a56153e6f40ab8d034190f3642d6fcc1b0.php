<!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="tabla_user">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">Nombre</th>
                <th class="min-w-125px">Ape. Paterno</th>
                <th class="min-w-125px">Ape. Materno</th>
                <th class="min-w-125px">Cedula</th>
                <th class="min-w-125px">Correo</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            <?php $__empty_1 = true; $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <div class="d-flex flex-column">
                            <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($u->nombres); ?></a>
                        </div>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($u->ap_paterno); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($u->ap_materno); ?></a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1"><?php echo e($u->cedula); ?></a>
                    </td>
                    <td>
                        <span class="badge badge-light-success fw-bold"><?php echo e($u->email); ?></span>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-info btn-icon btn-sm" onclick="modalPermisos('<?php echo e($u->id); ?>')"><i class="fa fa-list"></i></button>
                        <button class="btn btn-warning btn-icon btn-sm"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-icon btn-sm"><i class="fa fa-trash"></i></button>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h4 class="text-danger text-center">Sin registros</h4>
            <?php endif; ?>

            

        </tbody>
    </table>
<!--end::Table-->
    <script>
        $('#tabla_user').DataTable({
            
        });
    </script>
<?php /**PATH C:\laragon\www\bufet\resources\views/user/ajaxListado.blade.php ENDPATH**/ ?>