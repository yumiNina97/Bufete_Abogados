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
                                    </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success w-100" onclick="guardarCliente()">Guardar</button>
                        </div>
                    </div>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->


    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <h3>LISTADO DE CLIENTES</h3>

            <!--begin::Card title-->
            {{--  <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Buscar Venta" />
                </div>
                <!--end::Search-->
            </div>  --}}
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    {{--  <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Filter</button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->
                        <!--begin::Content-->
                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Role:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                    <option></option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Analyst">Analyst</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Support">Support</option>
                                    <option value="Trial">Trial</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                    <option></option>
                                    <option value="Enabled">Enabled</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Filter-->  --}}
                    {{--  <!--begin::Export-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                    <i class="ki-duotone ki-exit-up fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Export</button>
                    <!--end::Export-->
                    <!--begin::Add user-->  --}}
                    <button type="button" class="btn btn-primary" onclick="nuevo()">
                    <i class="ki-duotone ki-plus fs-2"></i>Nuevo Cliente</button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                </div>
                <!--end::Group actions-->
                <!--begin::Modal - Adjust Balance-->
                {{--  <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Export Users</h2>
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
                                <!--begin::Form-->
                                <form id="kt_modal_export_users_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                            <option></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Analyst">Analyst</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Support">Support</option>
                                            <option value="Trial">Trial</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                            <option></option>
                                            <option value="excel">Excel</option>
                                            <option value="pdf">PDF</option>
                                            <option value="cvs">CVS</option>
                                            <option value="zip">ZIP</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>  --}}
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <div id="table_roles">

            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@stop()

@section('js')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    {{--  <script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script>  --}}
    {{--  <script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>  --}}
    {{--  <script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}"></script>  --}}
    {{--  <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>  --}}

    <script type="text/javascript">

        $.ajaxSetup({
            // definimos cabecera donde estarra el token y poder hacer nuestras operaciones de put,post...
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $( document ).ready(function() {
            ajaxListado();
        });

       function guardarCliente(){
            if($("#formularioRol")[0].checkValidity()){
                datos = $("#formularioRol").serializeArray()
                $.ajax({
                    url: "{{ url('cliente/guarda') }}",
                    data:datos,
                    type: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        if(data.estado === 'success'){
                            $('#table_roles').html(data.listado);
                            $('#kt_modal_add_user').modal('hide');
                        }
                    }
                });
            }else{
    			$("#formularioRol")[0].reportValidity()
            }
        }

        function ajaxListado(){
            $.ajax({
                url: "{{ url('cliente/ajaxListado') }}",
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_roles').html(data.listado);
                }
            });
        }

        function eliminar(cliente){
            $.ajax({
                url: "{{ url('cliente/eliminar') }}",
                type: 'POST',
                data:{id:cliente},
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_roles').html(data.listado);
                }
            });
        }

        function editar(cliente, nombre, ap, am, cedula, tel, coreo, dir){
            $('#cliente_id').val(cliente)
            $('#nombres').val(nombre)
            $('#ap_paterno').val(ap)
            $('#ap_materno').val(am)
            $('#cedula').val(cedula)
            $('#telefono').val(tel)
            $('#correo').val(coreo)
            $('#direccion').val(dir)

            $('#kt_modal_add_user').modal('show');
        }

        function nuevo(){
            $('#cliente_id').val('0')
            $('#nombres').val('')
            $('#ap_paterno').val('')
            $('#ap_materno').val('')
            $('#cedula').val('')
            $('#telefono').val('')
            $('#correo').val('')
            $('#direccion').val('')

            $('#kt_modal_add_user').modal('show');
        }
    </script>
@endsection
