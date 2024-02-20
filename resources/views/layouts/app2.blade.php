<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'FISTA 24')</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FISTA | Forum de Empresas da escola ISTA do Iscte</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon_fista.jpg') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightslider.min.css') }}">

    <!-- JS  ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/back-to-top.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireStyles
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>
    <div class="main-wrapper">

        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <header>
            <!-- Header Start  -->
            <div id="header" class="section header-section header-section-04">

                <div class="container">

                    <!-- Header Wrap Start  -->
                    <div class="header-wrap">
                        <div class="header-logo logo-white">
                            <a class="logo-white" href="/"><img style="padding: 1.5rem;"
                                    src="{{ asset('img/fista/branco_fista.png') }}" alt=""></a>
                        </div>
                        <div class="header-logo logo-black">
                            <a class="logo-black" href="/"><img src="{{ asset('img/fista/original_fista.png') }}"
                                    alt=""></a>
                        </div>


                        <div class="header-menu d-none d-lg-block" style="margin-right: 10rem;">
                            <ul class="main-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/eventos">Evento</a>
                                </li>
                                <li><a href="/empresas">Empresas</a>
                                </li>
                                <li><a href="/sobre-nos">Sobre Nós</a></li>
                                <li><a href="/programa">Programa</a></li>
                                <!--
                                <li><a href="#">Atividades</a>
                                    <ul class="sub-menu">
                                        <li><a href="/concurso-de-ideias">Concurso de Ideias</a></li>
                                    </ul>
                                </li>-->
                                <!--<li><a href="#">Empresas</a>
                                </li>
                                <li><a href="contact.html">Concursos</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Concurso de ideias</a></li>
                                        <li><a href="blog-standard.html">Concurso de Matemática e Programação</a></li>
                                        <li><a href="blog-details.html">Concurso de Cibersegurança</a></li>
                                        <li><a href="blog-details.html">FISTA GO</a></li>
                                        <li><a href="blog-details.html">Corrida de Cursos</a></li>
                                    </ul>
                                </li>-->

                            </ul>
                        </div>

                        <!-- Header Meta Start -->
                        <div class="header-meta">
                            <div class="header-btn d-none d-xl-block">
                                <a class="btn" href="/entrar">Minha Conta</a>
                            </div>
                            <!-- Header Toggle Start -->
                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <!-- Header Toggle End -->
                        </div>
                        <!-- Header Meta End  -->

                    </div>
                    <!-- Header Wrap End  -->

                </div>
            </div>
            <!-- Header End -->

            <!-- Offcanvas Start-->
            <div class="offcanvas offcanvas-start" id="offcanvasExample">
                <div class="offcanvas-header">
                    <!-- Offcanvas Logo Start -->
                    <div class="offcanvas-logo">
                        <a href="/"><img src="{{ asset('img/fista/original_fista.png') }}" alt=""></a>
                    </div>
                    <!-- Offcanvas Logo End -->
                    <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i
                            class="flaticon-close"></i></button>
                </div>

                <!-- Offcanvas Body Start -->
                <div class="offcanvas-body">
                    <div class="offcanvas-menu">
                        <ul class="main-menu">
                            <li class="active-menu"><a href="/eventos">Evento</a></li>
                            <li><a href="/empresas">Empresas</a></li>
                            <li><a href="/sobre-nos">Sobre Nós</a></li>
                            <li><a href="/programa">Programa</a></li>
                            <!-- <li><a href="#">Oradores</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">IT Speed Talks</a></li>
                                        <li><a href="blog-standard.html">Conferências</a></li>
                                        <li><a href="blog-details.html">Keynote Speakers</a></li>
                                    </ul>
                                </li>-->

                            <!--
                            <li><a href="contact.html">Concursos</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Concurso de ideias</a></li>
                                    <li><a href="blog-standard.html">Concurso de Matemática e Programação</a></li>
                                    <li><a href="blog-details.html">Concurso de Cibersegurança</a></li>
                                    <li><a href="blog-details.html">FISTA GO</a></li>
                                    <li><a href="blog-details.html">Corrida de Cursos</a></li>
                                </ul>
                            </li>-->

                            <li><a class="btn" href="/entrar">Minha Conta</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Offcanvas Body End -->
            </div>
            <!-- Offcanvas End -->
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <!-- Footer content -->
            <!-- Footer Section Start -->
            <div class="section footer-section footer-section-04"
                style="background-image: url({{ asset('assets/images/bg/footer-bg3.jpg') }});">

                <div class="container">
                    <!-- Footer Widget Wrap Start -->
                    <div class="footer-widget-wrap">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget-about">
                                    <a class="footer-logo" href="/"><img
                                            src="{{ asset('img/fista/original_fista.png') }}" alt="Logo"></a>

                                    <!-- VAI SER O NOVO LOGO DO FISTA
                                    <a class="footer-logo" href="index.html"><img src="assets/images/logo.png" alt="Logo"></a>
                                    -->
                                    <p>O FISTA é uma feira de emprego que ocorre anualmente no Iscte.
                                        Este evento traz o mundo das empresas à universidade.
                                    </p>
                                    <div class="footer-social">
                                        <ul class="social">
                                            <li><a href="https://www.facebook.com/fista.iscte"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/fista.iscte/"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/fista"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCCNbJIiznD05DrHuhwe-InQ"><i
                                                        class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Links Úteis</h4>

                                    <div class="widget-link">
                                        <ul class="link">
                                            <li><a href="/sobre-nos">Multimédia dos anos anteriores </a></li>

                                            <li><a href="/politica-de-privacidade">Politicas de Privacidade</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">O que temos para ti?</h4>

                                    <div class="widget-link">
                                        <ul class="link">
                                            <li><a href="/brevemente">Oradores</a></li>
                                            <li><a href="/brevemente">Workshops</a></li>
                                            <li><a href="/empresas">Empresas</a></li>
                                            <li><a href="/eventos">Concursos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Informações de Contacto</h4>

                                    <div class="widget-info">
                                        <ul>

                                            <li>
                                                <div class="info-icon">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="info-text">
                                                    <span><a
                                                            href="mailto:fista@iscte-iul.pt">fista@iscte-iul.pt</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="info-icon">
                                                    <i class="flaticon-pin"></i>
                                                </div>
                                                <div class="info-text">
                                                    <span>Iscte - Av. das Forças Armadas, 1649-026 Lisboa</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                        </div>
                    </div>
                    <div class="copyright-text text-center">
                        <p><a
                                href="https://arquivo.pt/noFrame/replay/20110523080737/http://fista.iscte-iul.pt/">2011</a>&nbsp;|
                            &nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20120121012432/http://fista.iscte-iul.pt/">2012</a>&nbsp;|
                            &nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2014">2014</a>&nbsp;|
                            &nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2015">2015</a>&nbsp;|&nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2016">2016</a>&nbsp;|
                            &nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2017">2017</a>&nbsp;|&nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2018">2018</a>&nbsp;|
                            &nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2019">2019</a>&nbsp;|&nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2020">2020</a>&nbsp;|
                            &nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/2021">2021</a>&nbsp;|&nbsp;<a
                                href="https://arquivo.pt/noFrame/replay/20220729094345/https://fista.iscte-iul.pt/">2022</a>&nbsp;|
                            &nbsp;<a href="/2023/public">2023</a></p>
                    </div>
                    <!-- Footer Widget Wrap End -->
                </div>

                <!-- Footer Copyright Start -->
                <div class="footer-copyright-area">
                    <div class="container">
                        <div class="footer-copyright-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-12">

                                    <!-- Footer Copyright Text Start -->
                                    <div class="copyright-text text-center">
                                        <p>© Copyrights FISTA24 All rights reserved. </p>
                                    </div>
                                    <!-- Footer Copyright Text End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Copyright End -->
            </div>
            <!-- Footer Section End -->

            <!-- back to top start -->
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
            <!-- back to top end -->
        </footer>
    </div>

    <!-- JS
    ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/back-to-top.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/lightslider.min.js') }}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    @livewireScripts
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
