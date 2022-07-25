<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="{{route("employee.index")}}">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard">@lang('home')</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-apps">@lang('translation.Apps')</li>

      

              

               
                <li>
                    <a href="apps-calendar">
                        <i data-feather="calendar"></i>
                        <span data-key="t-calendar">@lang('translation.Calendars')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">@lang('translation.Contacts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="apps-contacts-grid" data-key="t-user-grid">@lang('translation.User_Grid')</a></li>
                        <li><a href="apps-contacts-list" data-key="t-user-list">@lang('translation.User_List')</a></li>
                        <li><a href="apps-contacts-profile" data-key="t-profile">@lang('translation.Profile')</a></li>
                    </ul>
                </li>

                
                <li class="menu-title" data-key="t-pages">@lang('translation.Pages')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-authentication">@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" data-key="t-login">@lang('translation.Login')</a></li>
                        <li><a href="auth-register" data-key="t-register">@lang('translation.Register')</a></li>
                        <li><a href="auth-recoverpw" data-key="t-recover-password">@lang('translation.Recover_Password')</a></li>
                        <li><a href="auth-lock-screen" data-key="t-lock-screen">@lang('translation.Lock_Screen')</a></li>
                        <li><a href="auth-logout" data-key="t-logout">@lang('Logout')</a></li>
                        <li><a href="auth-confirm-mail" data-key="t-confirm-mail">@lang('translation.Confirm_Mail')</a></li>
                        <li><a href="auth-email-verification" data-key="t-email-verification">@lang('translation.Email_verification')</a></li>
                        <li><a href="auth-two-step-verification" data-key="t-two-step-verification">@lang('translation.Two_step_verification')</a></li>
                    </ul>
                </li>

                
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="box"></i>
                        <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                        <span data-key="t-forms">@lang('translation.Forms')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements" data-key="t-form-elements">@lang('translation.Basic_Elements')</a></li>
                        <li><a href="form-validation" data-key="t-form-validation">@lang('translation.Validation')</a></li>
                        <li><a href="form-advanced" data-key="t-form-advanced">@lang('translation.Advanced_Plugins')</a></li>
                        <li><a href="form-editors" data-key="t-form-editors">@lang('translation.Editors')</a></li>
                        <li><a href="form-uploads" data-key="t-form-upload">@lang('translation.File_Upload')</a></li>
                        <li><a href="form-wizard" data-key="t-form-wizard">@lang('translation.Wizard')</a></li>
                        <li><a href="form-mask" data-key="t-form-mask">@lang('translation.Mask')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span data-key="t-tables">@lang('translation.Tables')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" data-key="t-basic-tables">@lang('translation.Bootstrap_Basic')</a></li>
                        <li><a href="tables-datatable" data-key="t-data-tables">@lang('translation.Data_Tables')</a></li>
                        <li><a href="tables-responsive" data-key="t-responsive-table">@lang('translation.Responsive')</a></li>
                        <li><a href="tables-editable" data-key="t-editable-table">@lang('translation.Editable_Table')</a></li>
                    </ul>
                </li>

                
            </ul>

            <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                        <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                        <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
