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

    <header class="main-header home-4">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.html"><img
                                    src="{{ asset('site/images/logo.png') }}"></a></figure>
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
        </div>

        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="{{ route('home') }}"><img
                            src="{{ asset('site/images/small-logo.png') }}"></a></figure>
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

    <section class="banner-style-four" style="background-image: url(site/images/icons/banner-bg-3.png);">
        <div class="pattern-bg" style="background-image: url(site/images/icons/pattern-5.png);"></div>
        <div class="anim-icons">
            <div class="icon icon-1"><img src="{{ asset('site/images/icons/anim-icon-1.png') }}"
                    alt=""></div>
            <div class="icon icon-2 rotate-me"><img
                    src="{{ asset('site/images/icons/anim-icon-2.png') }}" alt=""></div>
            <div class="icon icon-3 rotate-me"><img
                    src="{{ asset('site/images/icons/anim-icon-3.png') }}" alt=""></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <h1>Agência experimental de TI</h1>
                        @if(Auth()->check())
                            <div class="btn-box">

                                <form id="logout" action="{{ route('logout') }}" method="post">
                                    {{ csrf_field() }}
                                </form>

                                <a href="{{ route('dashboard') }}" class="link-btn">{{ Auth::user()->name }}<i class="fas fa-user"></i></a>
                                <a href="#" class="video-btn" onClick="document.getElementById('logout').submit();">Sair<i class="fas fa-sign-out-alt"></i></a>

                            </div>
                        @else
                            <div class="btn-box">
                                <a href="{{ route('register') }}" class="link-btn">Inscrver-se<i class="fas fa-angle-double-right"></i></a>
                                <a href="{{ route('login') }}" class="video-btn">Fazer Login<i
                                        class="fas fa-fingerprint"></i></a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="layer-bg" style="background-image: url(images/icons/leaf-1.png);"></div>
                        <figure class="image clearfix float-bob-y"><img
                                src="{{ asset('site/images/resource/illustration-20.png') }}"
                                alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-style-six">
        <div class="container">
            <div class="inner-box">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div id="content_block_15">
                            <div class="content-box wow fadeInUp animated" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                                <div class="sec-title">
                                    <h2>Objetivos</h2>
                                </div>
                                <div class="text">Oferecer aos alunos equipamentos para utilização em atividades
                                    didáticas teóricas e práticas na área de configuração de Redes de Computadores,
                                    Programação Micro-Controladores,
                                    Arquitetura de Computadores, Circuitos Lógicos e Teoria da Computação.</div>
                                <div class="text">Os núcleos aqui apresentados propiciarão o desenvolvimento de
                                    atividades práticas, complementares à fundamentação teórica.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div id="image_block_14">
                            <div class="image-box">
                                <div class="bg-layer"
                                    style="background-image: url(site/images/icons/image-shap-5.png);">
                                </div>
                                <figure class="image image-1 clearfix wow slideInRight animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms"><img
                                        src="{{ asset('images/resource/tab-1.png') }}" alt="">
                                </figure>
                                <figure class="image image-2 wow slideInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms"><img
                                        src="{{ asset('site/images/resource/phone-6.png') }}"
                                        alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-box">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div id="image_block_15">
                            <div class="image-box">
                                <figure class="image clearfix wow slideInLeft animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms"><img
                                        src="{{ asset('site/images/resource/screen-1.png') }}"
                                        alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div id="content_block_15">
                            <div class="content-box wow fadeInUp animated" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                                <br>
                                <br>
                                <div class="sec-title">
                                    <h2>Justificativa</h2>
                                </div>
                                <div class="text">A estrutura existente permitirá aos alunos o contato direto com
                                    hardware, Micro-Controladores – Arduino, Linguagem de Programação para os cursos de
                                    Sistemas Informação, Ciência da Computação, Jogos Digitais e Analise e
                                    Desenvolvimento de Sistemas,
                                    favorecendo o aprendizado dos tópicos apresentados nas diversas disciplinas
                                    correlatas.</div>
                                <div class="text">O contato físico com os equipamentos por parte dos alunos pode
                                    auxiliar o professor no desenvolvimento do tema, uma vez que os alunos terão a visão
                                    real dos equipamentos que poderão encontrar no mercado de trabalho,
                                    criando uma sinergia entre a tecnologia e conceitos teóricos.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-style-four">
        <div class="image-layer" style="background-image: url(site/images/icons/shap-6.png);"></div>
        <div class="container-fluid">
            <div class="sec-title center">
                <br>
                <h2>A Agências Experimental integra o Projeto Pedagógico dos cursos</h2>
                <p align="justify">A Agência Experimental se caracteriza como espaço pedagógico para realização de
                    atividades de cunho acadêmico que constituem os componentes curriculares dos cursos da Faculdade de
                    Informática. Trata-se, portanto,
                    de atividades curriculares e extracurriculares nas quais o aluno desenvolve aspectos inovadores e/ou
                    pouco explorados da prática. A Agência Experimental da TI, desenvolverá, de forma geral e genérica,
                    as seguintes atividades:
                </p>
                <br>
                <ul>
                    <li><strong>
                            <p>Capacitação</p>
                        </strong></li>
                    <li><strong>
                            <p>Treinamento</p>
                        </strong></li>
                    <li><strong>
                            <p>Criação e produção de materiais de cunho científicos</p>
                        </strong></li>
                    <li><strong>
                            <p>Planejamento e organização de eventos</p>
                        </strong></li>
                    <li><strong>
                            <p>Elaboração de pareceres técnicos pertinentes a área para enriquecimento das áreas do
                                saber, pertinentes ao curso; sob orientação técnica do professor orientador</p>
                        </strong></li>
                    <li><strong>
                            <p>Desenvolvimento de Startup</p>
                        </strong></li>
                </ul>

            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="faq-content">
                        <div class="sec-title">
                            <h2>Faq</h2>
                        </div>
                        <ul class="accordion-box">
                            @forelse($faqs as $item)
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h4>{{ $item->title }}</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">{{ $item->description }}</div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <h2>Ops... Não há Faq cadastrada no momento. :(</h2>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer style-two">
        <div class="image-layer" style="background-image: url(site/images/icons/footer-bg-2.png);"></div>
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <figure class="footer-logo"><a href="index.html"><img
                                            src="{{ asset('site/images/logo.png') }}" alt=""></a>
                                </figure>
                                <div class="text">&ensp;&ensp;&ensp;&ensp;Agência experimental de TI</div>
                                <ul class="social-links">
                                    <li>
                                        <h6>Siga-nos:</h6>
                                    </li>
                                    <li><a href="https://www.linkedin.com/school/unianchieta/"><span
                                                class="fab fa-linkedin"></span></a></li>
                                    <li><a href="https://www.facebook.com/GrupoAnchieta/"><span
                                                class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="https://www.instagram.com/grupoanchieta/"><span
                                                class="fab fa-instagram"></span></a></li>
                                    <li><a href="https://www.youtube.com/c/GrupoAnchietaJundia%C3%AD/videos"><span
                                                class="fab fa-youtube"></span></a></li>
                                </ul>
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
                                    <ul class="list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>Av. Doutor Adoniro Ladeira, 94, (km
                                            55,5 Rodovia Anhanguera), Jundiaí São Paulo 13210-795
                                        </li>
                                        <li>
                                            <i class="fas fa-phone-volume"></i>
                                            <a href="">0800 772 8445</a><br />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">&copy; {{ date('Y') }} <a href="#">Anchieta - Agência
                        experimental de TI</a>.</div>
            </div>
        </div>
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
    <script src="{{ asset('site/js/scrollbar.js') }}"></script>
    <script src="{{ asset('site/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('site/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('site/js/script.js') }}"></script>

</body>

</html>
