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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


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

                        <div class="header-logo">
                            <a class="logo-black" href="index.html"><img src="assets/images/logos/logo_fista_horizontal_azul_2023_v2.png" alt=""></a>
                        </div>

                        <div class="header-menu d-none d-lg-block">
                            <ul class="main-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="#">Evento</a>
                                </li>
                                <li>
                                    <a href="#">Programa</a>
                                </li>
                                <li><a href="#">Oradores</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">IT Speed Talks</a></li>
                                        <li><a href="blog-standard.html">Conferências</a></li>
                                        <li><a href="blog-details.html">Keynote Speakers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Empresas</a>
                                </li>
                                <li><a href="contact.html">Concursos</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Concurso de ideias</a></li>
                                        <li><a href="blog-standard.html">Concurso de Matemática e Programação</a></li>
                                        <li><a href="blog-details.html">Concurso de Cibersegurança</a></li>
                                        <li><a href="blog-details.html">FISTA GO</a></li>
                                        <li><a href="blog-details.html">Corrida de Cursos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sobre Nós</a>
                            </ul>
                        </div>

                        <!-- Header Meta Start -->
                        <div class="header-meta">

                            <div class="header-btn d-none d-xl-block">
                                <a class="btn" href="/login">Minha Conta</a>
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
                        <a href="index.html"><img src="assets/images/logos/logo_fista_horizontal_branco_2023.png" alt=""></a>
                    </div>
                    <!-- Offcanvas Logo End -->
                    <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
                </div>

                <!-- Offcanvas Body Start -->
                <div class="offcanvas-body">
                    <div class="offcanvas-menu">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="#">Evento</a>
                            </li>
                            <li>
                                <a href="#">Programa</a>
                            </li>
                            <li><a href="#">Oradores</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">IT Speed Talks</a></li>
                                    <li><a href="blog-standard.html">Conferências</a></li>
                                    <li><a href="blog-details.html">Keynote Speakers</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Empresas</a>
                            </li>
                            <li><a href="contact.html">Concursos</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Concurso de ideias</a></li>
                                    <li><a href="blog-standard.html">Concurso de Matemática e Programação</a></li>
                                    <li><a href="blog-details.html">Concurso de Cibersegurança</a></li>
                                    <li><a href="blog-details.html">FISTA GO</a></li>
                                    <li><a href="blog-details.html">Corrida de Cursos</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sobre Nós</a>
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
            <div class="section footer-section footer-section-04" style="background-image: url(assets/images/bg/footer-bg3.jpg);">

                <div class="container">
                    <!-- Footer Widget Wrap Start -->
                    <div class="footer-widget-wrap">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget-about">
                                    <a class="footer-logo" href="index.html"><img src="assets/images/logos/logo_fista_horizontal_azul_2023_v2.png" alt="Logo"></a>

                                    <!-- VAI SER O NOVO LOGO DO FISTA
                                    <a class="footer-logo" href="index.html"><img src="assets/images/logo.png" alt="Logo"></a>
                                    -->
                                    <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent.</p>
                                    <div class="footer-social">
                                        <ul class="social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Useful Links</h4>

                                    <div class="widget-link">
                                        <ul class="link">
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">About Company</a></li>
                                            <li><a href="#">Payment Gatway</a></li>
                                            <li><a href="#">Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Our Services</h4>

                                    <div class="widget-link">
                                        <ul class="link">
                                            <li><a href="#">Data Security</a></li>
                                            <li><a href="#">IT Managment</a></li>
                                            <li><a href="#">Outsourcing</a></li>
                                            <li><a href="#">Networking</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Contact Information</h4>

                                    <div class="widget-info">
                                        <ul>

                                            <li>
                                                <div class="info-icon">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="info-text">
                                                    <span><a href="#">fista@iscte-iul.pt</a></span>
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
                                        <p>© Copyrights 2023 FISTA24 All rights reserved. </p>
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
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/back-to-top.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/appear.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
