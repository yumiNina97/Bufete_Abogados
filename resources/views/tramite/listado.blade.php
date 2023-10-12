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
