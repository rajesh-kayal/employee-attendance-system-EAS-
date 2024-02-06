<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="/" class="logo">
            <span>
                <h1 style="color: white; font-size: 24px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="currentColor" d="M4.16 20.176a.475.475 0 0 1-.439-.294 9.428 9.428 0 0 1 5-12.11.475.475 0 0 1 .364.875A8.464 8.464 0 0 0 4.6 19.521a.474.474 0 0 1-.259.62.48.48 0 0 1-.18.035zm14.544-2.648c1.52-.571 2.17-2.01 1.74-3.853-.686-2.943-4.361-6.932-9.215-6.447a.475.475 0 1 0 .094.944 8.021 8.021 0 0 1 8.198 5.72 2.143 2.143 0 0 1-1.15 2.747c-.853.32-1.816-.386-2.99-1.343a.474.474 0 1 0-.599.735c.911.743 2.005 1.636 3.158 1.636a2.154 2.154 0 0 0 .764-.14zm-3.785 4.917a.475.475 0 0 0-.237-.627c-3.015-1.361-5.06-4.272-5.078-6.135a1.351 1.351 0 0 1 .754-1.358 2.579 2.579 0 0 1 2.614.342.474.474 0 1 0 .493-.811 3.521 3.521 0 0 0-3.514-.389 2.287 2.287 0 0 0-1.296 2.225c.02 2.147 2.181 5.431 5.636 6.99a.475.475 0 0 0 .628-.237zm4.019-1.766a.475.475 0 0 0-.344-.576c-2.603-.658-5.336-2.514-6.357-4.318a.475.475 0 1 0-.826.468c1.307 2.309 4.486 4.147 6.95 4.77a.48.48 0 0 0 .117.014.475.475 0 0 0 .46-.358zm-9.97 2.22a.475.475 0 0 0 .141-.656c-3.359-5.215-2.254-8.739-.287-10.172 1.93-1.407 5.336-1.247 7.848 1.813a.474.474 0 1 0 .733-.601c-2.88-3.512-6.858-3.64-9.14-1.978-2.3 1.675-3.668 5.68.049 11.452a.474.474 0 0 0 .655.142zM4.85 4.397c1.323-1.234 8.372-4.568 13.677-.33a.474.474 0 1 0 .592-.74c-5.494-4.39-12.897-1.51-14.916.377a.474.474 0 1 0 .647.693zm17.347 8.67a.475.475 0 0 0 .378-.555 10.525 10.525 0 0 0-9.397-8.332 10.523 10.523 0 0 0-11.054 6.63.475.475 0 0 0 .87.38c1.872-4.3 5.64-6.57 10.078-6.067a9.58 9.58 0 0 1 8.57 7.565.475.475 0 0 0 .466.387.496.496 0 0 0 .089-.009z"/><path fill="none" d="M0 0h24v24H0z"/>
    </svg>
    Attendance</h1>
</span>

            <i>
                <h1>A</h1>
            </i>
        </a>
    </div>

    <nav class="navbar-custom">
        <ul class="navbar-right d-flex list-inline float-right mb-0">
            <!-- <li class="dropdown notification-list d-none d-md-block">
                <form role="search" class="app-search">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li> -->

            <!-- full screen -->
            <li class="dropdown notification-list d-none d-md-block">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                    <i class="mdi mdi-fullscreen noti-icon"></i>
                </a>
            </li>


            <li class="dropdown notification-list">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/profile-icon.png" alt="user" class="rounded-circle"> Admin
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a> -->

                        {{-- <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a> --}}
                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>
<!-- Top Bar End -->
