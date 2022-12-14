<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Cristian Condori Guzman">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BookWeb - Biblioteca Especializada de Ingeneria de Sistemas">
    <meta name="keywords" content="Libros, Informe, Sistemas, Biblioteca">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    {{-- Titulo de la Pagina --}}
    <title>Biblioteca Especializada - EPIS</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- BARRA DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Book<span class="dot">Web</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand" href="#">
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/informe">Informe de Practicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://repositorio.unap.edu.pe/" target="_blink">Repositorio de Tesis</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}" target="_blink">Login</a>
                    </li> --}}
                    {{-- @can('home')    
                    <li class="nav-item">
                        <a class="nav-link" href="home" >Dashboard</a>
                    </li>
                    @endcan --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    {{-- <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Bienvenido a</h6>
                        <h1 class="display-3 my-4">Biblioteca <br> Especializada</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Ven y visita la Biblioteca Especializada</h6>
                        <h1 class="display-3 my-4">Nuevos Ingresos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- MILESTONE -->
    {{-- <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">90</h1>
                    <p class="mb-0">Tesis de Pregrado</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">45</h1>
                    <p class="mb-0">Informes de Practicas</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">190</h1>
                    <p class="mb-0">Libros espa??ol</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">380</h1>
                    <p class="mb-0">Libros Ingles</p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Seccion de Informe --}}
    <section id="services" class="text-center">
        {{-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Conoce nuestros</h6>
                        <h1>Nuevos Ingresos de Informes</h1>
                        <p class="mx-auto">En la biblioteca especializada de la EPIS. Contamos con Informes de Practicas
                            Pre-Profesionales. Te invitamos a conocer nuestros ultimos ingresos.</p>
                    </div>
                </div>
            </div> --}}

            <div class="container">
                <h3>{{$informe->info_nombre}}</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                
                              <div class="col-sm-3">
                                <div class="row">
                                  <div class="col-md-12">
                                      <img alt="No Thumbnail [100%x160]" class="img-thumbnail" data-src="holder.js/100%x160/text:No Thumbnail" style=" width: 100%; display: block;" src="/img/info_portada.png" data-holder-rendered="true">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <p class="fs-6" style="text-align: justify;">
                                    {{Str::limit($informe->info_descripcion, 1000)}}
                                </p>
                                <div class="col-md-12 mt-4">
                                    <h4>Autor</h4>
                                    <a class="text-decoration-none" href=""><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$informe->autor->au_nombre}} {{$informe->autor->au_paterno}} {{$informe->autor->au_materno}}</a>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h4>Fecha de presentaci??n</h4>
                                    <a href="" class="text-decoration-none"><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$informe->info_fecha}}</a>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h4>Visualizar documento</h4>
                                    <a class="text-decoration-none" href="{{$informe->info_pdf}}" target="_blink"><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$informe->info_nombre}}.pdf -  UNAP</a>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h4>Practicas pre-profesionales</h4>
                                    <a class="text-decoration-none" href=""><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$informe->categoria->cate_nombre}}</a>
                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
{{-- 
              <div class="container">
                @foreach ($informei as $informe)
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card titulo-informe">
                    <a href="{{route('informe.show', $informe)}}">
                      <div class="card-body">
                        <div class="row  align-items-center">
                          <div class="col-1 col-sm-2 d-none d-sm-block d-flex aligns-items-center justify-content-center">
                            <img src="https://docplayer.es/docs-images/40/3207205/images/page_1.jpg"
                                 class="img-fluid" />
                          </div>
                          <div class="col-md-10 parrafo-informe">
                            <h3 class="fs-4">{{$informe->info_nombre}}</h3>
                            <div class="row">
                              <p class="fs-6">{{$informe->autor->au_nombre}} (Universidad Nacional del Altiplano - Puno, {{$informe->info_fecha}})</p>
                              <p class="lh-sm" style="text-align: justify;">
                                {{Str::limit($informe->info_descripcion, 900)}}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div> --}}


    </section>

    {{-- Miembros de la Biblioteca --}}
    {{-- <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Nuestro Equipo</h6>
                        <h1>Personal de la Biblioteca</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="team-member">
                        <div class="image">
                            <img class="rounded-circle personal-img" src="/img/personal1.svg" alt="Foto de Personal">
                        </div>
                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="team-member">
                        <div class="image">
                            <img class="rounded-circle personal-img" src="/img/personal2.svg" alt="Foto de Personal">
                        </div>
                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="team-member">
                        <div class="image">
                            <img class="rounded-circle personal-img" src="/img/personal1.svg" alt="Foto de Personal">
                        </div>
                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Pie de Pagina (footer) --}}
    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">BookWeb<span class="dot">.</span></h4>
                        <p>Biblioteca Especializada de la Escuela Profesional del Ingenieria de Sistemas </p>
                        <div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
                            <a href="https://www.facebook.com/biblioteca.especializada.epis23" target="_blank"
                                rel="noopener noreferrer">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="https://www.sistemas.edu.pe/" target="_blank" rel="noopener noreferrer">
                                <i class="bx bxl-chrome"></i>
                            </a>
                            <a href="mailto:btzarmin@gmai.com" target="_blank" rel="noopener noreferrer">
                                <i class="bx bxl-gmail"></i>
                            </a>
                        </div>
                        <div class="derechos-de-autor">Creado por BookWeb (2022) &#169;</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/page.js"></script>
</body>

</html>
