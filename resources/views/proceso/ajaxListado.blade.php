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
            @forelse ( $procesos as  $p )
                <tr>
                    <td class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <a class="text-gray-800 text-hover-primary mb-1">{{ $p->nombre }}</a>
                        </div>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $p->descripcion }}</a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $p->tipo }}</a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $p->fecha_cita }}</a>
                    </td>
                    <td class="text-end">
                        <button class="mb-1 btn btn-info btn-sm btn-icon" onclick="verArchivo('{{ $p->id }}','{{ $p->nombre }}')"> <i class="fa fa-file"></i></button>
                        <button class="btn btn-warning btn-icon btn-sm" onclick="editar('{{ $p->id }}', '{{ $p->nombre }}', '{{ $p->descripcion }}', '{{ $p->tipo }}', '{{ $p->estado }}', '{{ $p->personas }}', '{{ $p->fecha_cita }}', '{{ $p->cliente_id }}', '{{ $p->posicion }}', '{{ $p->contra_demanda }}')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-icon btn-sm" onclick="eliminar('{{ $p->id }}')"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @empty
                <h4 class="text-danger text-center">Sin registros</h4>
            @endforelse


        </tbody>
    </table>
<!--end::Table-->
    <script>
        $('#kt_table_users1').DataTable({
            {{--  responsive: true,
            language: {
                url: '{{ asset('datatableEs.json') }}',
            },
            order: [[ 0, "desc" ]]  --}}
        });
    </script>
