<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Anchieta - Agência experimental de TI</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">

    <link href="{{ asset('site/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/responsive.css') }}" rel="stylesheet">

</head>

<body class="boxed_wrapper">

    <div class="preloader"></div>

    <header class="main-header style-four">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('site/images/logo.png') }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right clearfix">
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('galeria') }}">Galeria</a></li>
                                    <li><a href="{{ route('curso') }}">Curso de Extensão</a></li>
                                    <li><a href="{{ route('artigo') }}">Artigo</a></li>
                                    <li><a href="{{ route('evento') }}">Eventos</a></li>
                                    <li><a href="{{ route('revista') }}">Revista</a></li>
                                    <li><a href="{{ route('contato') }}">Contato</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="{{ route('home') }}"><img
                            src="{{ asset('site/images/small-logo.png') }}" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('home') }}"><img
                        src="{{ asset('site/images/logo.png') }}"></a></div>
            <div class="menu-outer">
            </div>
            <div class="contact-info">
                <h4>CONTATO</h4>
                <ul>
                    <li>Av. Doutor Adoniro Ladeira, 94, (km 55,5 Rodovia Anhanguera), Jundiaí São Paulo 13210-795</li>
                    <li><a href="#">0800 772 8445</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://www.linkedin.com/school/unianchieta/"><span class="fab fa-linkedin"></span></a>
                    </li>
                    <li><a href="https://www.facebook.com/GrupoAnchieta/"><span
                                class="fab fa-facebook-square"></span></a></li>
                    <li><a href="https://www.instagram.com/grupoanchieta/"><span class="fab fa-instagram"></span></a>
                    </li>
                    <li><a href="https://www.youtube.com/c/GrupoAnchietaJundia%C3%AD/videos"><span
                                class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <section class="page-title">
        <div class="anim-icons">
            <div class="icon icon-1"><img src="{{ asset('site/images/icons/anim-icon-17.png') }}" alt=""></div>
            <div class="icon icon-2 rotate-me"><img src="{{ asset('site/images/icons/anim-icon-18.png') }}" alt=""></div>
            <div class="icon icon-3 rotate-me"><img src="{{ asset('site/images/icons/anim-icon-19.png') }}" alt=""></div>
            <div class="icon icon-4"></div>
        </div>
        <div class="container">
            <div class="content-box clearfix">
                <div class="title-box pull-left">
                    <h1>@yield('title-page')</h1>
                    <p>Anchieta - Agência experimental de TI</p>
                </div>
                <ul class="bread-crumb pull-right">
                    <li>@yield('title-page')</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </section>

    @yield('content')

    <footer class="main-footer style-five style-six">
        <div class="anim-icons">
            <div class="icon icon-1"><img src="{{ asset('site/images/icons/pattern-21.png') }}">
            </div>
        </div>
        <div class="image-layer"></div>
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <figure class="footer-logo"><a href="{{ route('home') }}"><img
                                            src="{{ asset('site/images/logo.png') }}"></a>
                                </figure>
                                <div class="text">&ensp;&ensp;&ensp;&ensp;Agência experimental de TI</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Links</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('galeria') }}">Galeria</a></li>
                                        <li><a href="{{ route('curso') }}">Curso de Extensão</a></li>
                                        <li><a href="{{ route('artigo') }}">Artigo</a></li>
                                        <li><a href="{{ route('evento') }}">Eventos</a></li>
                                        <li><a href="{{ route('revista') }}">Revista</a></li>
                                        <li><a href="{{ route('contato') }}">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h4 class="widget-title">Contato</h4>
                                <div class="widget-content">
                                    <ul class="contact-info clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i> Av. Doutor Adoniro Ladeira, 94, (km
                                            55,5 Rodovia Anhanguera), Jundiaí São Paulo 13210-795</li>
                                        <li><i class="fas fa-phone"></i><a href="#">0800 772 8445</a></li>
                                    </ul>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="https://www.linkedin.com/school/unianchieta/"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.facebook.com/GrupoAnchieta/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/grupoanchieta/"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/c/GrupoAnchietaJundia%C3%AD/videos"><i
                                                class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">&copy; {{ date('Y') }} <a href="#">Anchieta - Agência
                experimental de TI</a>.</div>
    </footer>

    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>

    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/js/popper.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/owl.js') }}"></script>
    <script src="{{ asset('site/js/wow.js') }}"></script>
    <script src="{{ asset('site/js/validation.js') }}"></script>
    <script src="{{ asset('site/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('site/js/appear.js') }}"></script>
    <script src="{{ asset('site/js/circle-progress.js') }}"></script>
    <script src="{{ asset('site/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('site/js/scrollbar.js') }}"></script>
    <script src="{{ asset('site/js/nav-tool.js') }}"></script>
    <script src="{{ asset('site/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('site/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('site/js/isotope.js') }}"></script>
    <script src="{{ asset('site/js/script.js') }}"></script>

</body>

</html>
