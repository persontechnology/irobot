@extends('main')
@section('content')
        <!--Banner Area-->
        <section id="banner">
            <div class="banner-element-arae">
                <img src="{{ asset('ui/assets/img/banner/banner-element.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <!--Banner Content-->
                        <div id="banner-content">
                            <h5>Robot educativo</h5>
                            <h1>Presentamos {{ config('app.name','') }} <span>para codificar, descubrir y jugar.</span></h1>
                            <!--Banner Button-->
                            <div id="banner-btn">
                                <a class="btn btn-general btn-banner smooth-scroll btn-lg" href="#about" title="Read More" role="button">NUEVO PROYECTO</a>
                            </div>
                        </div>
                        <!--Banner Content-->
                    </div>
                </div>
            </div>
        </section>
        <!--Banner Area Ends-->
    
        <!--About Us Section-->
        <section id="about" class="section-wrapper">
            <div class="container">
    
                <!--Upper Part-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading">
                            <h6>SOBRE NOSOTROS</h6>
                            <h2>Creativo y muy divertido.</h2>
                        </div>
                    </div>
                </div>
                <!--Upper Part Ends-->
    
                <!--Lower Part-->
                <div class="row">
                    <!-- Lower Left Side -->
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <div id="about-left">
    
                            <div id="about-left-img" class="wow fadeInLeft animated">
                                <img src="{{ asset('ui/assets/img/about/about_us.jpg') }}" class="img-fluid" alt="About Us image">
                            </div>
    
                            <div id="about-left-img2" class="wow fadeInRight animated">
                                <img src="{{ asset('ui/assets/img/about/2.png') }}" class="img-fluid" alt="about-img">
                                <div class="video-icon">
                                    <a href="https://www.youtube.com/embed/Kb8CW3axqRE" class="banner-video video-link"
                                        data-width="1200" data-height="1080"><img src="{{ asset('ui/assets/img/banner/play-button.svg') }}" alt="icon"></a>
                                </div>
                                <div class="img-overlay"></div>
                            </div>
    
                        </div>
                    </div>
                    <!-- Lower Left Side Ends -->
    
                    <!--Lower Right Side-->
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="about-para">
                            <p>
                                Un robot que hace cosas increíbles.
                                
                            </p>
                            <p>
                                Los niños pueden codificar su robot {{ config('app.name','') }} para dibujar mover, reproducir música, la luz y el sonido, y más, todo mientras exploran los fundamentos de la robótica.
                            </p>
                        </div>
                        <!--About List-->
                        <div class="about-list">
                            <ul>
                                <li><i class="fa fa-check-circle "></i> Entorno altamente seguro y amigable.</li>
                                <li><i class="fa fa-check-circle "></i> Juegos de interior y exterior para niños</li>
                                <li><i class="fa fa-check-circle "></i> Profesor muy profesional y cualificado.</li>
                                <li><i class="fa fa-check-circle "></i> Movimineto, Música, Luz, pata niños.</li>
                                <li><i class="fa fa-check-circle "></i> Accede a preguntas frecuentes y obtén ayuda para usar tu robot.</li>
                            </ul>
                        </div>
    
                        <div id="about-btn">
                            <a class="btn btn-general btn-about smooth-scroll" href="about.html" title="Discover More"
                                role="button">Ver todos los proyectos</a>
                        </div>
                    </div>
                    <!--Lower Right Side Ends-->
    
                </div>
    
                <!--Lower Part Ends-->
            </div>
            <!--About BG Image-->
            <div id="about-bg-img">
                <div class="about-bg-img1">
                    <img src="{{ asset('ui/assets/img/about/about_us_element1.png') }}" class="img-fluid" alt="Element 1">
                </div>
                <div class="about-bg-img2">
                    <img src="{{ asset('ui/assets/img/about/about_us_element2.png') }}" class="img-fluid" alt="Element 2">
                </div>
                <div class="about-bg-img3">
                    <img src="{{ asset('ui/assets/img/about/about_us_element3.png') }}" class="img-fluid" alt="Element 3">
                </div>
                <div class="about-bg-img4">
                    <img src="{{ asset('ui/assets/img/about/about_us_element4.png') }}" class="img-fluid" alt="Element 4">
                </div>
                <div class="about-bg-img5">
                    <img src="{{ asset('ui/assets/img/about/about_us_element5.png') }}" class="img-fluid" alt="Element 5">
                </div>
            </div>
            <!--About BG Image Ends-->
        </section>
        <!--About Us Section Ends-->
    
        <!--Offer Section-->
        <section id="offer" class="section-wrapper">
            <div class="container">
    
                <!-- upper part -->
                <div id="offer_upper">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <div class="horizontal-heading light">
                                <h6>PLATAFORMA DE {{ config('app.name','') }}</h6>
                                <h2>Hace que aprender a codificar sea  <br>fácil y natural en cualquier entorno.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- upper part Ends -->
    
                <!-- Lower Part -->
                <div class="row">
    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="offer-items learning-program text-center ">
                            <img src="{{ asset('ui/assets/img/offer/offer_LP_img.png') }}" class="img-fluid" alt="Learning Program">
                            <h6>Programa de aprendizaje</h6>
                            <p>
                                Presentamos nuestra plataforma de desarrollo de robots móviles y web para aprender a programar con capacidad WIFI.
                            </p>
                        </div>
                    </div>
    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="offer-items expert-teacher text-center">
                            <img src="{{ asset('ui/assets/img/offer/offer_ET_img.png') }}" class="img-fluid" alt="Expert Teachers">
                            <h6>Programando nivel 1                        </h6>
                            <p>
                                En un primer nivel para etapa infantil o iniciando primaria nos encontramos con un sistema de programación por bloques con las opciones mínimas para poder programar el robot en secuencia.
                            </p>
                        </div>
                    </div>
    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="offer-items large-playground text-center">
                            <img src="{{ asset('ui/assets/img/offer/offer_LPLay_img.png') }}" class="img-fluid" alt="Large Playground">
                            <h6>Programando nivel 2</h6>
                            <p>
                                En el nivel 2 se cambia de una programación por bloques vertical tipo Scratch en el que las órdenes están anidadas dentro de eventos, repeticiones o condicionales.
                            </p>
                        </div>
                    </div>
    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="offer-items full-day text-center">
                            <img src="{{ asset('ui/assets/img/offer/offer_FDP_img.png') }}" class="img-fluid" alt="Full Day Program">
                            <h6>Programando nivel 3</h6>
                            <p>
                                Lo que {{ config('app.name','') }} propone es crear el programa utilizando código y de la misma manera se puede programar desde 0 o transformar un programa creado desde el nivel 1 o 2.
                            </p>
                        </div>
                    </div>
    
                </div>
                <!-- Lower Part Ends -->
            </div>
        </section>
        <!--Offer Section Ends-->
    
    
        <!--Things for Kids-->
        <section id="activity" class="section-wrapper">
            <div class="container">
                <!--Upper Part-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading">
                            <h6>Consejos y trucos</h6>
                            <h2>Con {{ config('app.name','') }} plataforma, los estudiantes pueden...</h2>
                        </div>
                    </div>
                </div>
                <div class="activity-lower">
                    <div class="row">
                        <!--Activity Left-->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <!--Activity Left Tab 1-->
                            <div class="left-activity">
                                    <h6>1</h6>
                                    <p>
                                        Los estudiantes pueden progresar a través de varios niveles de programación, desde bloques gráficos hasta codificación de texto , hasta que los dominen todos.
                                    </p>
                            </div>
                            <!--Activity Left Tab 2-->
                            <div class="left-activity">
                                    <h6 class="head-tab2">2</h6>
                                    <p>
                                        Los estudiantes pueden usar la plataforma de codificación {{ config('app.name','') }} para programar el  avatar raíz virtual  o un robot raíz real.
                                    </p>
                            </div>
                        </div>
                        <!--Activity Right-->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <!--Activity Right Tab 1-->
                            <div class="right-activity">
                                    <h6>3</h6>
                                    <p>
                                        {{ config('app.name') }}  tiene tres niveles de programación integrados: bloques gráficos, bloques híbridos y bloques de texto completo.
                                    </p> 
                            </div>
                            <!--Activity Right Tab 2-->
                            <div class="right-activity">
                                    <h6>4</h6>
                                    <p>
                                        La plataforma funciona con la mayoría de los sistemas operativos, incluidos Android, Chrome OS, Windows, iOS y macOS.
                                    </p>
                            </div>
                        </div>
                        <!--Middle Image-->
                        <div class="activity-mid-image">
                            <div class="activity-mid-tab">
                                <img src="{{ asset('ui/assets/img/kids-activity/kids_img.jpg') }}" alt="Things for kids image">
                            </div>
                        </div>
                    </div>
                </div>
                
                    
             </div>
        </section>
        <!--Things for Kids Ends-->
    
    
        <!--Team Section-->
        <section id="team" class="section-wrapper">
            <div class="container">
                <!-- upper part -->
                <div id="team_upper">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <div class="horizontal-heading">
                                <h6>NUESTRO EQUIPO</h6>
                                <h2>Reúnase con nuestro maestro experto</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- upper part Ends -->
                <!--Lower Part-->
                <div class="row">
                    <!--Team Member 01-->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="team-members team-member1">
                            <div class="team-member-overlay">
                                <ul class="social-list">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                                <img src="{{ asset('ui/assets/img/team/team_02.jpg') }}" class="img-fluid" alt="team member">
                            </div>
                            <div class="team-members-content text-center">
                                <a href="teacher-details1.html">
                                    <h6>JOSE TOCA</h6>
                                    <p>JEFE DE PROYECTO</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Team Member 02-->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="team-members team-member2">
                            <div class="team-member-overlay">
                                <ul class="social-list">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                                <img src="{{ asset('ui/assets/img/team/team_01.jpg') }}" class="img-fluid" alt="team member">
                            </div>
                            <div class="team-members-content text-center">
                                <a href="teacher-details1.html">
                                    <h6>TANNIA CAMALLE</h6>
                                    <p>DIRECTORA DE PROYECTO</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="team-members team-member2">
                            <div class="team-member-overlay">
                                <ul class="social-list">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                                <img src="{{ asset('ui/assets/img/team/team_01.jpg') }}" class="img-fluid" alt="team member">
                            </div>
                            <div class="team-members-content text-center">
                                <a href="teacher-details1.html">
                                    <h6>MAYRA ALBAN</h6>
                                    <p>TUTOR DE PROYECTO</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Lower Part Ends-->
            </div>
        </section>
        <!--Team Section Ends-->
    
    
    
        <!--Blog Section-->
        <section id="blog" class="section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
    
                        <!--Stat Contents-->
                        <div class="stats-content">
    
                            <!--Stats Items 01-->
                            <div class="stats-item text-center">
                                <img src="{{ asset('ui/assets/img/stats/4.png') }}" class="img-fluid" alt="stats img 01">
                                <h5> <span class="counter"> 45</span> +</h5>
                                <p class="text-muted">Niños</p>
                            </div>
    
                            <!--Stats Items 02-->
                            <div class="stats-item text-center">
                                <img src="{{ asset('ui/assets/img/stats/2.png') }}" class="img-fluid" alt="stats img 02">
                                <h5> <span class="counter">2</span></h5>
                                <p class="text-muted">Profesores</p>
                            </div>
    
                            <!--Stats Items 03-->
                            <div class="stats-item text-center">
                                <img src="{{ asset('ui/assets/img/stats/3.png') }}" class="img-fluid" alt="stats img 03">
                                <h5> <span class="counter">1</span> +</h5>
                                <p class="text-muted">año de experiencia</p>
                            </div>
    
                            <!--Stats Items 04-->
                            <div class="stats-item text-center">
                                <img src="{{ asset('ui/assets/img/stats/1.png') }}" class="img-fluid" alt="stats img 04">
                                <h5> <span class="counter">3</span></h5>
                                <p class="text-muted">Niveles</p>
                            </div>
    
                        </div>
    
                    </div>
                </div>
            </div>
            <!--Stats BG Image-->
            <div id="stats-bg-img">
                <div class="stats-bg-img1">
                    <img src="{{ asset('ui/assets/img/stats/stats-bg-element1.png') }}" class="img-fluid" alt="Element 1">
                </div>
                <div class="stats-bg-img2">
                    <img src="{{ asset('ui/assets/img/stats/stats-bg-element2.png') }}" class="img-fluid" alt="Element 2">
                </div>
            </div>
            <!--Stats BG Image Ends-->
        </section>
        <!--Blog Section Ends-->
@endsection