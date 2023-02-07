<!DOCTYPE html>
<html lang="es"> 

<head>
    <!--Required Meta Tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--Title-->
    <title>{{ config('app.name','') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('ui/assets/img/fav-icon/fav_icon.png') }}">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('ui/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('ui/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- WOW CSS -->
    <link rel="stylesheet" href="{{ asset('ui/assets/vendor/wow/css/wow.min.css') }}">
    <!--Owl Carousel Css-->
    <link rel="stylesheet" href="{{ asset('ui/assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('ui/assets/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('ui/assets/css/style.css') }}">
    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('ui/assets/css/color.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('ui/assets/css/responsive.css') }}">
    
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Preloader Ends -->

    <!--Header Area-->
    <header class="site-menu">
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="top-bar-left">
                            <p>Bienvenido a  <span>{{ config('app.name','') }}</span>,Un viaje de codificación impulsado por robots
                            </p>
                        </div> 
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="top-bar-right">
                            <ul class="social-custom list-inline">
                                <li class="list-inline-item clock text-muted">{{ '@'.config('app.name','') }}
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header Area Ends-->

    <!--Navbar Area-->
    <nav class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="{{ url('/') }}"><img src="{{ asset('ui/assets/img/logo/ankur_logo.png') }}" alt=""></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="{{ url ('/') }}"><img src="{{ asset('ui/assets/img/nav/nav_home.png') }}" class="img-fluid" alt="Home">Inicio </a>
                    </li>
                    <li>
                        <a href="{{ route('nuevo-proyecto') }}"><img src="{{ asset('ui/assets/img/nav/contact_nav.png') }}" class="img-fluid" alt="About">Nuevo proyecto</a>
                    </li>
                    <li>
                        <a href="{{ route('proyectos') }}"><img src="{{ asset('ui/assets/img/nav/news_nav.png') }}" alt="Contact">Listado de proyectos</a>
                    </li>
                    {{-- <li>
                        <a href="services.html"><img src="{{ asset('ui/assets/img/nav/programs_nav.png') }}" class="img-fluid" alt="Services">Listado</a>
                    </li> --}}
                    {{-- <li>
                        <a href="class.html"> <img src="{{ asset('ui/assets/img/nav/programs_nav.png') }}" class="img-fluid" alt="Programs">Listado</a>
                    </li> --}}
                    {{-- <li>
                        <a href="events.html"><img src="{{ asset('ui/assets/img/nav/gallery_nav.png') }}" class="img-fluid" alt="Events">Events</a>
                    </li>
                    <li>
                        <a href="blogs.html"><img src="{{ asset('ui/assets/img/nav/news_nav.png') }}" class="img-fluid" alt="News">News</a>
                    </li>
                    <li>
                        <a href="#!"><img src="{{ asset('ui/assets/img/icons/jewels.png') }}" alt="Contact">Manual</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="gallery.html">NIVEL DE APRENDIZAJE UNO</a>
                            </li>
                            <li>
                                <a href="our-teacher.html">NIVEL DE APRENDIZAJE UNO</a>
                            </li>
                            <li>
                                <a href="testimonial.html">Testimonial</a>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                        </ul>
                    </li> --}}
                   
                    
                    {{-- <li>
                        <div class="src-key">
                            <i id="search-btn" class="fa fa-search"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id='search-box'>
                                        <i id="close-btn" class="fa fa-times"></i>
                                        <form action='/search' id='search-form' method='get' target='_top'>
                                            <input id='search-text' name='q' placeholder='Search' type='text' />
                                            <button id='search-button' type='submit'>
                                                <span>Search</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}

                </ul>
            </nav>
        </div>
        <div id="navbar-img">
            <img src="{{ asset('ui/assets/img/nav/nav-bg.png') }}" class="img-fluid" alt="Navbar img">
        </div>
    </nav>
    <!--Navbar Area Ends-->

    @yield('content')

    <!--Footer Section-->
    <footer id="footer-top">
        <div class="section-wrapper">
            <div class="container">
                <div id="contact-content">
                    <div class="row">
                        <!--Contact Content 01-->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="contact-content1">
                                <div class="contact-content-head">
                                    <a href="{{ url('/') }}"><img src="{{ asset('ui/assets/img/contact/footer_logo.png') }}" alt="Ankur Logo"></a>
                                </div>
                                <div class="contact-content1-body">
                                    <p>
                                        {{ config('app.name','') }} se encuentra entre las herramientas de robótica educativa más versátiles . Con tres niveles de codificación y algo para todos, desde prelectores hasta programadores en su plataforma web, y móvil.
                                    </p>
                                </div>
                               
                            </div>
                        </div>

                        <!--Contact Content 02-->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="contact-content2">
                                <div class="contact-content1-head">
                                    <h6>NUESTRA GALERIA</h6>
                                    <img src="{{ asset('ui/assets/img/icons/Underline-1.png') }}" alt="underliine img">
                                </div>
                                <div class="contact-content2-body">
                                    <div class="contact-item">
                                        <!-- Nested Coloums -->
                                        <div class="row">
                                            <!-- contact Items 01 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img1.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img1.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 1">
                                                </a>
                                            </div>
                                            <!-- contact Items 02 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img2.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img2.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 2">
                                                </a>
                                            </div>
                                            <!-- contact Items 03 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img3.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img3.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 3">
                                                </a>
                                            </div>
                                            <!-- contact Items 04 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img4.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img4.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 4">
                                                </a>
                                            </div>
                                            <!-- contact Items 05 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img5.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img5.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 5">
                                                </a>
                                            </div>
                                            <!-- contact Items 06 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img6.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img6.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 6">
                                                </a>
                                            </div>
                                            <!-- contact Items 07 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img7.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img7.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 7">
                                                </a>
                                            </div>
                                            <!-- contact Items 08 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img8.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img8.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 8">
                                                </a>
                                            </div>
                                            <!-- contact Items 09 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="{{ asset('ui/assets/img/contact/gallery-img9.jpg') }}">
                                                    <img src="{{ asset('ui/assets/img/contact/footer_img9.jpg') }}" class="img-fluid"
                                                        alt="Gallary image 9">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--contact Content 03-->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="contact-content3">
                                <div class="contact-content1-head">
                                    <h6>Para los estudiantes</h6>
                                    <img src="{{ asset('ui/assets/img/icons/Underline-1.png') }}" alt="underline image">
                                </div>
                                <div class="contact-content1-body">
                                    <p>
                                        Utilizando los tres niveles de codificación , los estudiantes pueden controlar los movimientos, las luces y los sonidos del robot mientras adquieren fluidez en informática en el aula.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--contact Content 04-->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="contact-content4">
                                <div class="contact-content1-head">
                                    <h6>UBICACIÓN</h6>
                                    <img src="{{ asset('ui/assets/img/icons/Underline-1.png') }}" alt="underline image">
                                </div>
                                <div class="contact-content4-body">
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i>
                                            Av. Simón Rodríguez s/n Barrio El Ejido Sector San Felipe. <br>
                                            Latacunga - Ecuador.
                                        </li>
                                        <li><a href="mailto:"><i class="fa fa-envelope-o"></i>comunicacion.institucional@utc.edu.ec                                        </a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i>(593) 03 2252205 / 2252307 / 2252346.</a></li>
                                    </ul>
                                </div>
                                <div class="contact-content4-foot">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-Bottom Area-->
        <div id="footer-main">
            <div class="bottom-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-main-left">
                                <p><a href=""><span>JOSE & TANNIA</span></a> &#169;&nbsp;{{ DATE('y') }}. TODOS LOS DERECHOS RESERVADOS</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-main-right">
                                <p>
                                    <a href="#!"><span>Mapa del sitio -</span></a> 
                                    <a href="#!"><span>Términos de servicio -</span></a> 
                                    <a href="#!"><span>Política de privacidad</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-Bottom Area Ends-->
        <!--Footer Elements-->
        <div class="footer-elements">
            <img src="{{ asset('ui/assets/img/icons/element-2.png') }}" class="img-fluid" alt="">
        </div>
    </footer>
    <!--Footer Section Ends-->

    <!--JQuery-->
    <script src="{{ asset('ui/assets/vendor/jquery/jquery.min.js') }}"></script>
    <!--Bootstrap JS-->
    <script src="{{ asset('ui/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Easing smooth scroll JS -->
    <script src="{{ asset('ui/assets/vendor/ease-scroll/jquery.easing.1.3.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('ui/assets/vendor/wow/js/wow.min.js') }}"></script>
  
    <!--Owl Carousel JS-->
    <script src="{{ asset('ui/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!--Waypoint JS-->
    <script src="{{ asset('ui/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <!--Counter Up JS-->
    <script src="{{ asset('ui/assets/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('ui/assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <!--Custom JS-->
    <script src="{{ asset('ui/assets/js/app.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>