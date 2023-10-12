<!--begin::Table-->
<input type="hidden" id="proceso_id_archivos" value="{{ $proceso_id }}">
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">Nombre</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            @forelse ( $archivos as  $a )
                <tr>
                    <td>
                    <a class="text-gray-800 text-hover-primary mb-1">{{ $a->nombre }}</a>
                    </td>
                    <td class="text-end">
                        <a href='{{ url("archivoProceso/$a->nombre") }}' download class="mb-1 btn btn-success btn-sm btn-icon"> <i class="fa fa-download"></i></a>
                        <button class="btn btn-danger btn-icon btn-sm" onclick="eliminarArchivo('{{ $a->id }}', '{{ $a->documento_id }}')"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                @empty
                <h4 class="text-danger text-center">Sin Archivos</h4>
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