<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('backend/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('backend/assets/css/main.min.css') }}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    @include('sweetalert::alert')

    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="{{ route('dashboard') }}">
                    <span class="brand">ร้าน
                        <span class="brand-tip">BaNANA </span>
                    </span>
                    <span class="brand-mini">Shop</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>

                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">

                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="{{ asset('backend/assets/img/admin-avatar.png') }}" />
                            <span></span>{{ Auth::user()->name }}<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                                    class="fa fa-user"></i>Profile</a>
                            <li class="dropdown-divider"></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();"><i
                                        class="fa fa-power-off"></i>Logout</a>
                            </form>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{ asset('backend/assets/img/admin-avatar.png') }}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">{{ Auth::user()->name }}</div>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="{{ route('dashboard') }}"><i
                                class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/user/index') }}"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">User</span></a>

                    </li>
                    <li>
                        <a href="{{ url('admin/category/index') }}"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Category</span></a>

                    </li>
                    <li>
                        <a href="{{ url('admin/product/index') }}"><i
                                class="sidebar-item-icon fa fa-shopping-cart"></i>
                            <span class="nav-label">Product</span></a>

                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">


            @yield('con')




            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4"
                    href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589"
                    target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->

    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{ asset('backend/assets/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript">
    </script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('backend/assets/vendors/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}" type="text/javascript">
    </script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('backend/assets/js/app.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ asset('backend/assets/js/scripts/dashboard_1_demo.js') }}" type="text/javascript"></script>
</body>

</html>
