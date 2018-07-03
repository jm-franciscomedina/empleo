<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('meta-description','ExternA Consultora')">
        <meta name="author" content="">
        <title>@yield('meta-title', config('app.name'))</title>
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    </head>
    <body class="grey lighten-3">
        <!--Incio del Menu-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="{{ url('/') }}">Empleos ExternA</a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <!-- Links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/empresa') }}"><i class="fa fa-building" aria-hidden="true"></i> Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/postulantes') }}"><i class="fas fa-users"></i> Postulantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/ofertas') }}"><i class="fas fa-address-card"></i> Ofertas</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/preguntas') }}"><i class="fa fa-comments" aria-hidden="true"></i> Preguntas y Respuestas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                    </ul>
                     <!-- Links -->
                </div>
                <!-- Collapsible content -->
            </div>   
        </nav>
        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Iniciar Sesión</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="form-horizontal" method="Post" action="{{ route('login') }}">
                           {{ csrf_field() }}
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5 {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" name="email" id="defaultForm-email" class="form-control validate" required title="Este Campo es Obligatorio" value="{{ old('email') }}">
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="md-form mb-4 {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="password" name="password" class="form-control validate" required title="Este Campo es Obligatorio" value="{{ old('password') }}">
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Contraseña</label>
                                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <a class="btn btn-link d-flex justify-content-rigth" href="{{ route('password.request') }}">¿Olvido su Contraseña?</a>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-default">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>         
        <!--Fin del Menu-->
        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="img/workplace.jpg" height="600" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption d-flex align-items-end flex-column mb-auto p-2">
                        <div class="info text-md-right ">
                            <h1 class="h1-responsive ">Sí eres un <strong>Postulante</strong>, aquí encontrarás las mejores<br> ofertas de empleos adaptadas a ti.</h1>
                            <a class="btn btn-default" href="{{ url('/postulantes') }}"><i class="fas fa-users"></i> Registrarte</a>
                        </div>    
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/conference-room.jpg" height="600" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption d-flex align-items-end flex-column">
                        <div class="info1 text-md-right">
                            <h1 class="h1-responsive">Sí eres una <strong>Empresa</strong>, aquí encontrarás muchas opciones para tener un empleado según el perfil <br>que solicita tu organización.</h1>
                            <a class="btn btn-default" href="{{ url('/empresa') }}"><i class="fa fa-building" aria-hidden="true"></i> Registrarte</a>
                        </div>
                    </div>
                </div>
                  
            </div>
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
            <!--/.Controls-->
        </div>

<!-- contenido de la pagina-->

@yield('content')

        <footer class="fondo-foot page-footer font-small pt-0 grey darken-1">
            <!--Footer Links-->
            <div class="container pt-5 mt-5 mb-4 text-center text-md-left">
                <div class="row mt-3">

                    <!--First column-->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Nombre de la Empresa</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit.</p>
                        <address>
                            <p>Geronimo de la Torre n° 285 - Dpto 601 - Urb . Las Quintanas <br>Ciudad: TRUJILLO, Region: La Libertad<br>Teléfonos: +51 998008789 - 968596592</p>
                            
                        </address>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Links del Sitio</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="{{ url('/') }}">Inicio</a>
                        </p>
                        <p>
                            <a href="{{ url('/empresa') }}">Empresas</a>
                        </p>
                        <p>
                            <a href="{{ url('/postulantes') }}">Postulantes</a>
                        </p>
                        <p>
                            <a href="{{ url('/ofertas') }}">Ofertas</a>
                        </p>
                        <p>
                            <a href="{{ url('/preguntas') }}">Preguntas y Respuestas</a>
                        </p>
                        
                    </div>
                    <!--/.Second column-->

                    <!--Third column-->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Aspectos Legales</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Términos y Condiciones</a>
                        </p>
                        
                    </div>
                    <!--/.Third column-->

                    <!--Four column-->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Redes Sociales</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        
                        
                    </div>
                    <!--/.Four column-->

                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class="footer-copyright py-3 text-center">
                © 2018 Copyright: Todos los Derechos Reservados | Diseñado y Desarrollado por ExternA Consultora
            </div>
            <!--/.Copyright-->
        </footer>
        <!--/.Footer--> 
        <!-- Archivos JavaScript -->
        <script type="text/javascript" src="{{ asset('js/fontawesome-all.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    </body>
</html>