<!--<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h2>Recursos Humanos</h2>
            <p>Reclutamiento - Selección Científica.
                Evaluación de Personal por Competencias - Assessment Center.<br>
                Capacitación - Programas de Entrenamiento.
                Head Hunting.Administración de Planillas.
                Outsourcing de Personal - Tercerización de Personal.</p>
            <p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Comercial y Marketing</h2>
            <p>Clientes Incognitos - Auditorias de Atención al Cliente.<br>
            Encuestas de Satisfacción.<br>
            Flashmob - Marketing en Movimiento.<br>
            Fuerzas de Ventas - Task Force.<br>
            Redes Sociales.<br>
            ATL.<br>
            BTL.</p>
            <p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>TI: Tecnologías de Información</h2>
            <p>TI: Tecnología de la Información- partner de Red Hat y Jboss.<br>
            Desarrollo de software a la medida.<br>
            Desarrollo de aplicativos móviles a la medida.<br>
            Diseño y desarrollo de páginas web.</p>
            <p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Estudio de Mercado</h2>
            <p>Análisis del Mercado.<br>
            Análisis del Cliente.<br>
            Análisis del Producto.<br>
            Análisis de la Marca.</p>
            <p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>
        </div>
    </div>
</section>

<section  class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Quires Ser Miembro de <br/> <span class="navy"> Externa</span> </h1>
            <p>Siguenos en nuestras redes sociale y contactanos atravez de ellas. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <i class="fa fa-facebook-square features-icon"></i>
                <h2>Facebook</h2>
                <p><a href="">www.facebook.com</a></p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-instagram features-icon"></i>
                <h2>instagram</h2>
                <p><a href="">www.instagram.com</a></p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
            <br><br><br><br><h1>¿Eres Empresa? <br/> <span class="navy"> ¡No hay Problema!</span> </h1>
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>
                <i class="fa fa-google-plus-square features-icon"></i>
                <h2>Google Plus</h2>
                <p><a href="">www.google.com</a></p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-linkedin-square features-icon"></i>
                <h2>linkedin</h2>
                <p><a href="">www.linkedin.com</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Registrate como Empresa</h1>
            <p>En el siguiente Modulo Podras Registrarte en la Plataforma<br>Y Publicar todas Sus Vancantes de Empleo</p>
        </div>
    </div>
    <div class="row features-block">
        <div class="col-lg-6 features-text wow fadeInLeft">
            <h2>Registro de Empresa</h2>
            <small>O Inicia Sesion</small>
            <p>Aca Podrar registrarce en el sistema y publicar tosdas sus vacante.</p>
            <div class="text-lef">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Inicial Sesion</button>
            </div>
            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <i class="fa fa-users modal-icon"></i>
                            <h4 class="modal-title">Inicio de Sesion</h4>
                            <small class="font-bold">Verifique que sus datos sean Correctos antes de entrar.</small>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                               <div class="col-lg-5">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>Inicio de Sesion Empresa</h5>
                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                                <a class="close-link">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <form class="form-horizontal" method="Post" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label  for="email" class="col-lg-2 control-label">Nombre de Usuario o Correo</label>
                                                    <div class="col-lg-10">
                                                        <input  type="text" id="email" name="email" placeholder="Usuario o Correo" class="form-control  "required title="Este Campo es Obligatorio" value="{{ old('email') }}" >
                                                        <span class="help-block m-b-none">usuario- usuario@usuario.com.</span>
                                                    </div>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label  for="password"  class="col-lg-2 control-label">Contraseña</label>
                                                    <div class="col-lg-10">
                                                        <input id="password"  name="password" type="password" placeholder="Contraseña" class="form-control "required title="Este Campo es Obligatorio">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <div class="i-checks">
                                                        <label><input type="checkbox"><i></i>Recordarme</label></div>
                                                    </div>
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                         Olvido su Contraseña?
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger form-group" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success form-group">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-6 text-lef wow fadeInRight">
            <!-- comienzo del formulario widzar-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Formulario de Registro de Empresa</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                Asistente de registro
                            </h2>
                            <p>
                                Asegurece Que los Datos Sean Correctos, los * indican campos obligatorios
                            </p>

                            <form id="form" action="#" class="wizard-big">
                                <h1>Datos de Cuenta</h1>
                                <fieldset>
                                    <h2>Datos de uso de Autenticacion</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Nombre de Usuario *</label>
                                                <input id="userName" name="userName" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña *</label>
                                                <input id="password" name="password" type="password" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirme Contraseña *</label>
                                                <input id="confirm" name="confirm" type="password" class="form-control required">
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Datos de Empresa</h1>
                                <fieldset>
                                    <h2>Informacion de la empresa</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nombre de la Empresa *</label>
                                                <input id="name" name="name" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label> Razon Social *</label>
                                                <input id="surname" name="surname" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Correo *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label>Pagina web *</label>
                                                <input id="site" name="site" type="url" class="form-control required url ">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <h1>Terminos y Condiciones</h1>
                                <fieldset>
                                    <h2>Terminos y condiciones</h2>
                                    <a href="">Leer terminos y condiciones</a><br>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">Acepto los terminos y Condiciones de la Empresa.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- </section>

<section id="team" class="gray-section team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Our Team</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">
                    <img src="img/landing/avatar3.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Amelia</span> Smith</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">John</span> Novak</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">
                    <img src="img/landing/avatar2.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Peter</span> Johnson</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Las Ofertas mas Recientes</h1>
                <p>Puedes Ver las Ofertas mas Recientes Publicadas Por las empresas </p>
            </div>
        </div>
        <div class="row features-block">

            <div class="col-lg-12">
            @foreach($posts as $post)
                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-content">
                                <a href="#" class="btn-link">
                                    <h2>{{$post->title}}</h2>
                                </a>
                                <div class="small m-b-xs">
                                    <strong>{{$post->published_at->diffForHumans()  }}</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> {{$post->published_at->format('M d')  }}</span>
                                </div>
                                <p>{{$post->excerpt}}</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Categoria:</h4>
                                            <button class="btn btn-white btn-xs" type="button">{{$post->category->name}}</button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="small text-right">
                                            <h5>Etiquetas:</h5>
                                            <i class="fa fa-tags"> </i>
                                            @foreach($post->tags as $tag)
                                            <span >  #{{$tag->name}} </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
            @endforeach          
            </div>
        </div>             
    </div>
</section>

<section id="testimonials" class="navy-section testimonials" style="margin-top: 0">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-comment big-icon"></i>
                <h1>
                    What our users say
                </h1>
                <div class="testimonials-text">
                    <i>"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."</i>
                </div>
                <small>
                    <strong>12.02.2014 - Andy Smith</strong>
                </small>
            </div>
        </div>
    </div>

</section>

<section class="comments gray-section" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>What our partners say</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada. </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-4">
                <div class="bubble">
                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                        <img alt="image" src="img/landing/avatar3.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                        <img alt="image" src="img/landing/avatar1.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                        <img alt="image" src="img/landing/avatar2.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div>
            </div>



        </div>
    </div>

</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>More and more extra great feautres</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-bar-chart big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
            <div class="col-lg-5 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-bolt big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-clock-o big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
            <div class="col-lg-5 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-users big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
        </div>
    </div>

</section>
<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>App Pricing</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Basic
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$16</span> / month
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled selected">
                    <li class="pricing-title">
                        Standard
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$22</span> / month
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <strong>Support platform</strong>
                    </li>
                    <li class="plan-action">
                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Premium
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$160</span> / month
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
                <p>*Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. <span class="navy">Various versions</span>  have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
        </div>
    </div>

</section>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    795 Folsom Ave, Suite 600<br/>
                    San Francisco, CA 94107<br/>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 Company Name</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>-->