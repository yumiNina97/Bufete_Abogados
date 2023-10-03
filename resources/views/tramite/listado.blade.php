@extends('layouts.app')
@section('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('metadatos')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('content')

    <!--end::Modal - New Card-->
    <!--begin::Modal - Add task-->
    <div class="modal fade" id="modal_archivos" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="modal_archivos">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Archivos del proceso <span class="text-info" id="nombre_proceso"></span></h2>
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
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form id="formulario_new_archivos">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="file" id="fileNew" class="form-control" multiple required>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success btn-sm w-100" type="button" onclick="agregarArchivos()"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </form>

                    <div id="tabla_archivo">

                    </div>
                </div>
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->

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
                    <h2 class="fw-bold">Formulario de rol</h2>
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

                    <form id="formularioRol"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Nombres</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-solid mb-3 mb-lg-0">
                                    <input type="hidden" value="0" id="tramite_id" name="tramite_id">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Descripcion</label>
                                    <input type="text" id="descripcion" name="descripcion" class="form-control form-control-solid mb-3 mb-lg-0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Tipo</label>
                                    <input type="text" id="tipo" name="tipo" class="form-control form-control-solid mb-3 mb-lg-0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Estado</label>
                                    <input type="text" id="estado" name="estado" class="form-control form-control-solid mb-3 mb-lg-0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Personas</label>
                                    <input type="text" id="personas" name="personas" class="form-control form-control-solid mb-3 mb-lg-0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Cita</label>
                                    <input type="datetime-local" id="cita" name="cita" class="form-control form-control-solid mb-3 mb-lg-0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Cliente</label>
                                    <select name="cliente_id" id="cliente_id" class="form-control form-control-solid mb-3 mb-lg-0"  data-control="select2" data-dropdown-parent="#kt_modal_add_user" data-placeholder="Select an option" data-allow-clear="true">
                                        <option value="">SELECCIONE</option>
                                        @foreach ( $clientes as $c)
                                        <option value="{{ $c->id }}">{{ $c->nombres }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="required fw-semibold fs-6 mb-2">Archivo</label>
                                <input type="file" class="form-control" name="file[]" id="file" multiple>
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
            <h3>LISTADO DE TRAMITES</h3>

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
                    <button type="button" class="btn btn-primary" onclick="nuevo()">
                    <i class="ki-duotone ki-plus fs-2"></i>Nuevo Tramite</button>
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
                <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
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
                </div>
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

                var formData = new FormData();
                var archivo = $('#file')[0].files;
                for(let i=0;i<archivo.length;i++){
                    formData.append('archivo[]', archivo[i]);
                }

                formData.append('nombre', $('#nombre').val());
                formData.append('tramite_id', $('#tramite_id').val());
                formData.append('descripcion', $('#descripcion').val());
                formData.append('tipo', $('#tipo').val());
                formData.append('estado', $('#estado').val());
                formData.append('personas', $('#personas').val());
                formData.append('fecha_cita', $('#cita').val());
                formData.append('cliente_id', $('#cliente_id').val());

                $.ajax({
                    url: "{{ url('tramite/guarda') }}",
                    data:formData,
                    type: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if(data.estado === 'success'){
                            $('#table_roles').html(data.listado);
                            $('#kt_modal_add_user').modal('hide');
                        }
                    }
                });

            }else{

            }




            {{--  if($("#formularioRol")[0].checkValidity()){
                datos = $("#formularioRol").serializeArray()
                $.ajax({
                    url: "{{ url('tramite/guarda') }}",
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
            }  --}}
        }

        function ajaxListado(){
            $.ajax({
                url: "{{ url('tramite/ajaxListado') }}",
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
                url: "{{ url('tramite/eliminar') }}",
                type: 'POST',
                data:{id:cliente},
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#table_roles').html(data.listado);
                }
            });
        }

        function editar(tramite, nombre, des, tpo, estado, personas, cita, cliente_id){
            $('#tramite_id').val(tramite)
            $('#nombre').val(nombre)
            $('#descripcion').val(des)
            $('#tipo').val(tpo)
            $('#estado').val(estado)
            $('#personas').val(personas)
            $('#cita').val(cita)
            $('#cliente_id').val(cliente_id)

            $('#kt_modal_add_user').modal('show');
        }

        function nuevo(){
            $('#tramite_id').val('0')
            $('#nombre').val('')
            $('#descripcion').val('')
            $('#tipo').val('')
            $('#estado').val('')
            $('#personas').val('')
            $('#cita').val('')
            $('#cliente_id').val('')

            $('#kt_modal_add_user').modal('show');
        }

        function verArchivo(proceso, nombre){

            $.ajax({
                url: "{{ url('proceso/ajaxListadoArchivo') }}",
                type: 'POST',
                data:  {
                    id:proceso,
                    tipo:1
                },
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#tabla_archivo').html(data.listado);
                }
            });

            $('#nombre_proceso').text(nombre)
            $('#modal_archivos').modal('show')
        }

        function eliminarArchivo(archivo, proceso){
            $.ajax({
                url: "{{ url('proceso/eliminarArchivo') }}",
                type: 'POST',
                data:  {
                    id:archivo,
                    proceso:proceso,
                    tipo:1
                },
                dataType: 'json',
                success: function(data) {
                    if(data.estado === 'success')
                        $('#tabla_archivo').html(data.listado);
                }
            });
        }

        function agregarArchivos(){
            if($("#formulario_new_archivos")[0].checkValidity()){

                var formData = new FormData();
                var archivo = $('#fileNew')[0].files;
                for(let i=0;i<archivo.length;i++){
                    formData.append('archivo[]', archivo[i]);
                }
                formData.append('proceso', $('#proceso_id_archivos').val());
                formData.append('tipo', 1);

                $.ajax({
                    url: "{{ url('proceso/agregarNewArchivos') }}",
                    data:formData,
                    type: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if(data.estado === 'success'){
                            $('#tabla_archivo').html(data.listado);
                        }
                    }
                });
            }else{
    			$("#formulario_new_archivos")[0].reportValidity()
            }
        }
    </script>
@endsection


