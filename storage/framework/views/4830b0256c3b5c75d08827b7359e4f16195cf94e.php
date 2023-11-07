<?php $__env->startSection('css'); ?>
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <h1>CALENDARIO</h1>
                        <hr>
                        <!--begin::Calendar-->
                        <div id="kt_calendar_app"></div>
                        <!--end::Calendar-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Modals-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="#" id="kt_modal_add_event_form">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold" data-kt-calendar="title">Add Event</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold required mb-2">Event Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Event Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Event Location</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
                                            <span class="form-check-label fw-semibold" for="kt_calendar_datepicker_allday">All Day</span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2 required">Event Start Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Event Start Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2 required">Event End Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header border-0 justify-content-end">
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
                                    <i class="ki-duotone ki-pencil fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Edit-->
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </div>
                                <!--end::Edit-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-2x">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                <!--begin::Row-->
                                <div class="d-flex">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-calendar-8 fs-1 text-muted me-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <div class="mb-9">
                                        <!--begin::Event name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name"></span>
                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                        </div>
                                        <!--end::Event name-->
                                        <!--begin::Event description-->
                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                        <!--end::Event description-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-dot h-10px w-10px bg-success ms-2 me-7"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Event start date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bold">Starts</span>
                                        <span data-kt-calendar="event_start_date"></span>
                                    </div>
                                    <!--end::Event start date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-dot h-10px w-10px bg-danger ms-2 me-7"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Event end date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bold">Ends</span>
                                        <span data-kt-calendar="event_end_date"></span>
                                    </div>
                                    <!--end::Event end date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-geolocation fs-1 text-muted me-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Event location-->
                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                    <!--end::Event location-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer">
        <!--begin::Footer container-->
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->
</div>
<!--end:::Main-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/custom/apps/calendar/calendar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/widgets.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom/widgets.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom/apps/chat/chat.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom/utilities/modals/upgrade-plan.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom/utilities/modals/create-app.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom/utilities/modals/users-search.js')); ?>"></script>

    <script>

        function ajaxEventosProcesos(){
            $.ajax({
                url: "<?php echo e(url('eventos/procesos')); ?>",
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data)

                    
                }
            });
        }

        $( document ).ready(function() {

            $.ajax({
                url: "<?php echo e(url('eventos/procesos')); ?>",
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    console.log(data)

                    const element = document.getElementById("kt_calendar_app");

                    var todayDate = moment().startOf("day");
                    var YM = todayDate.format("YYYY-MM");
                    var YESTERDAY = todayDate.clone().subtract(1, "day").format("YYYY-MM-DD");
                    var TODAY = todayDate.format("YYYY-MM-DD");
                    var TOMORROW = todayDate.clone().add(1, "day").format("YYYY-MM-DD");

                    var calendarEl = document.getElementById("kt_calendar_app");
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        headerToolbar: {
                            left: "prev,next today",
                            center: "title",
                            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
                        },

                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                        nowIndicator: true,
                        now: TODAY + "T09:25:00", // just for demo

                        views: {
                            dayGridMonth: { buttonText: "mes" },
                            timeGridWeek: { buttonText: "semana" },
                            timeGridDay: { buttonText: "dia" }
                        },

                        initialView: "dayGridMonth",
                        initialDate: TODAY,

                        editable: true,
                        dayMaxEvents: true, // allow "more" link when too many events
                        navLinks: true,
                        
                        events: data,

                        /*
                        eventContent: function (info) {
                            var element = $(info.el);

                            if (info.event.extendedProps && info.event.extendedProps.description) {
                                if (element.hasClass("fc-day-grid-event")) {
                                    element.data("content", info.event.extendedProps.description);
                                    element.data("placement", "top");
                                    KTApp.initPopover(element);
                                } else if (element.hasClass("fc-time-grid-event")) {
                                    element.find(".fc-title").append("<div class="fc-description">" + info.event.extendedProps.description + "</div>");
                                } else if (element.find(".fc-list-item-title").lenght !== 0) {
                                    element.find(".fc-list-item-title").append("<div class="fc-description">" + info.event.extendedProps.description + "</div>");
                                }
                            }
                        }
                        */
                    });

                    //calendar.fullCalendar('removeEvents');

                    calendar.render();


                }
            });

            //var calendar = $('#kt_calendar_app').fullCalendar(); // Obtener el objeto calendario
            //calendar.fullCalendar('removeEvents'); // Eliminar todos los eventos del calendario


        });
    </script>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bufet\resources\views/home/inicio.blade.php ENDPATH**/ ?>