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
            <tbody class="text-gray-600 fw-semibold">
            @forelse ( $clientes as  $c )
                <tr>
                    <td class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <a class="text-gray-800 text-hover-primary mb-1">{{ $c->nombres }}</a>
                        </div>
                    </td>
                    <td>
                    <a class="text-gray-800 text-hover-primary mb-1">{{ $c->ap_paterno }}</a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $c->ap_materno }}</a> </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $c->cedula }}</a>
                    </td>