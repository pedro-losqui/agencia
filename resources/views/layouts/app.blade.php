<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Anchieta - Agência experimental de TI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/css/app.min.css" rel="stylesheet" type="text/css" />

    <livewire:styles />
</head>

<body>

    <header id="topnav">

        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </li>

                    <li class="d-none d-sm-block">
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ Auth()->user()->image }}" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                               {{  Auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    Bem-vindo(a)!
                                </h5>
                            </div>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Minha Conta</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <form id="logout" action="{{ route('logout') }}" method="post">
                                {{ csrf_field() }}
                            </form>

                            <a href="javascript:void(0);" class="dropdown-item notify-item" onClick="document.getElementById('logout').submit();">
                                <i class="fe-log-out"></i>
                                <span>Saír</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('site/images/logo.png') }}" alt="" height="46">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('site/images/logo.png') }}" alt="" height="28">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            Agência experimental de TI
                        </a>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="#">
                                <i class="la la-dashboard"></i>Dashboard </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                                <i class="la la-user"></i>Usuário </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                                <i class="la la-image"></i>Galeria </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                                <i class="la la-mortar-board"></i>Curso </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                                <i class="la la-newspaper-o"></i>Artigo </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#">
                                <i class="la la-clipboard"></i>Evento </a>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </header>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">@yield('title-page')</h4>
                    </div>

                    @yield('content')

                </div>
            </div>
        </div> 
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    &copy; {{ date('Y') }} <a href="#">Anchieta - Agência
                        experimental de TI</a>.
                </div>
            </div>
        </div>
    </footer>

    <div class="rightbar-overlay"></div>

    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.min.js') }}"></script>

    <livewire:scripts />
</body>

</html>
