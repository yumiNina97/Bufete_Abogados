<div class="app-sidebar-menu overflow-hidden flex-column-fluid" style="background: #123344;">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <!--begin:Menu item-->
            
            <!--end:Menu item-->
            <?php
                $permisos = json_decode(Auth::user()->permisos);
            ?>

            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">MENU</span>
                </div>
                <!--end:Menu content-->
            </div>
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?php echo e(url('/home')); ?>">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-rocket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">AGENDA</span>
                </a>
                <!--end:Menu link-->
            </div>
            <?php if((in_array("USR",$permisos))): ?>
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?php echo e(url('/user')); ?>" >
                    <span class="menu-icon">
                        <i class="ki-duotone ki-rocket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">USUARIOS</span>
                </a>
                <!--end:Menu link-->
            </div>
            <?php endif; ?>
            <?php if((in_array("ROL",$permisos))): ?>
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?php echo e(url('/rol')); ?>">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-rocket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">ROLES</span>
                </a>
                <!--end:Menu link-->
            </div>
            <?php endif; ?>
            <?php if((in_array("CLI",$permisos))): ?>
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?php echo e(url('/cliente')); ?>">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-rocket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">CLIENTE</span>
                </a>
                <!--end:Menu link-->
            </div>
            <?php endif; ?>
            <?php if((in_array("PRO",$permisos))): ?>
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?php echo e(url('/proceso')); ?>">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-rocket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">PROCESO</span>
                </a>
                <!--end:Menu link-->
            </div>
            <?php endif; ?>
            <?php if((in_array("TRA",$permisos))): ?>
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?php echo e(url('/tramite')); ?>">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-rocket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">TRAMITE</span>
                </a>
                <!--end:Menu link-->
            </div>
            <?php endif; ?>
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?php echo e(url('/reporte')); ?>">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-rocket fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">REPORTES</span>
                </a>
                <!--end:Menu link-->
            </div>

            <!--begin:Menu item-->
            
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            

            
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<?php /**PATH C:\laragon\www\bufet\resources\views/partials/menu.blade.php ENDPATH**/ ?>