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
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $c->ap_materno }}</a>
                    </td>
                    <td>
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $c->cedula }}</a>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="required fw-semibold fs-6 mb-2" for="">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fecha_ini_{{ $c->id }}">
                            </div>
                            <div class="col-md-6">
                                <label class="required fw-semibold fs-6 mb-2" for="">Fecha Fin</label>
                                <input type="date" class="form-control" id="fecha_fin_{{ $c->id }}">
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                        {{--  <a href="{{ url('reporte/generaPdf',[$c->id,1]) }}" target="_blank" class="btn btn-info btn-icon btn-sm" title="PROCESOS"><i class="fa fa-list"></i></a>  --}}
                        {{--  <a href="{{ url('reporte/generaPdf',[$c->id,1]) }}" target="_blank" class="btn btn-info btn-icon btn-sm" title="PROCESOS"><i class="fa fa-list"></i></a>  --}}
                        <button class="btn btn-info btn-icon btn-sm" onclick="generaReporteCliente('{{ $c->id }}')" target="_blank" title="PROCESOS"><i class="fa fa-list"></i></button>
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
