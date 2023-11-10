@extends('layouts.app')
/Cohesion y acoplamiento razonable/
@section('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('metadatos')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('content')

    <!--end::Modal - New Card-->
    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Formulario de cliente</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                    <form id="formularioRol">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Nombres</label>
                                    <input type="text" id="nombres" name="nombres" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[a-zA-Z\s]{4,}" title="El nombre debe contener solo letras y al menos cuatro caracteres" required>
                                    <input type="hidden" value="0" id="cliente_id" name="cliente_id">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Ap Paterno</label>
                                    <input type="text" id="ap_paterno" name="ap_paterno" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[a-zA-Z]{4,}" title="El apellido debe contener solo letras y al menos cuatro caracteres" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Ap Materno</label>
                                    <input type="text" id="ap_materno" name="ap_materno" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[a-zA-Z]{4,}" title="El apellido debe contener solo letras y al menos cuatro caracteres" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Cedula</label>
                                    
                                    <input type="text" id="cedula" name="cedula" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[0-9]{7,}" title="La cedula debe contener solo numeros y mayor a 7 digitos" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Telefonos</label>
                                    <input type="number" id="telefono" name="telefono" class="form-control form-control-solid mb-3 mb-lg-0" pattern="[0-9]{7,}" title="El telefono debe contener solo numeros y mayor a 7 digitos" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Correo</label>
                                    <input type="email" id="correo" name="correo" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Direccion</label>
                                    <input type="text" id="direccion" name="direccion" class="form-control form-control-solid mb-3 mb-lg-0" required>
                               


<!--begin::Table-->
/Cohesion y acoplamiento razonable/
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