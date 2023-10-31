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
                    </td> <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $c->telefonos }}</a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $c->direccion }}</a>
                    </td>
                    <td class="text-end">
                    <button class="btn btn-warning btn-icon btn-sm" onclick="editar('{{ $c->id }}', '{{ $c->nombres }}', '{{ $c->ap_paterno }}', '{{ $c->ap_materno }}', '{{ $c->cedula }}', '{{ $c->telefonos }}', '{{ $c->correo }}', '{{ $c->direccion }}')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-icon btn-sm" onclick="eliminar('{{ $c->id }}')"><i class="fa fa-trash"></i></button>
                        </td>
                </tr>
            @empty
                <h4 class="text-danger text-center">Sin registros</h4>
            @endforelse