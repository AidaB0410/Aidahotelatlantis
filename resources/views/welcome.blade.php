<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atlantis Hotel Resort</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('portal/css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/custom.css') }}">

  </head>
  <body>

  <!-- START: header -->

  <header role="banner" class="probootstrap-header">
    <!-- <div class="container"> -->
    <div class="row">
        <a href="{{ url('/') }}" class="probootstrap-logo visible-xs"><img src="{{ asset('portal/img/logo_sm.png') }}" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="{{ active('/') }}"><a href="index.html">Inicio</a></li>

            <li><a href="{{ url('/habitaciones') }}">Habitaciones</a></li>

            <li class="hidden-xs probootstrap-logo-center"><a href="index.html"><img src="{{ asset('portal/img/logo_md.png') }}" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
            
            <li><a href="{{ route('login') }}">Inicio de Sesión</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect With Us</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
        </div>
    <!-- </div> -->
  </header>
  <!-- END: header -->

  <section class="probootstrap-slider flexslider">
    <ul class="slides">
       <li style="background-image: url({{ asset('portal/img/bienvenidos.jpg') }});" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="{{ asset('portal/img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Bienvenidos al Hotel Atlantis</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap"> --------------------Se Parte de Nuestra Familia--------------------</div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url({{ asset('portal/img/5estrellas.jpg') }});" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="{{ asset('portal/img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Una Experiencia</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap"> Ven y Disfruta De Comodidad y Tranquilidad</div>
                </div>
              </div>
            </div>
          </div>
          
        </li>
    </ul>
  </section>

  <section class="probootstrap-cta probootstrap-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="probootstrap-cta-heading">Reserva con tu Familia <span> &mdash; Listos para Atenderte.</span></h2>
          <div class="probootstrap-cta-button-wrap"><a href="#" class="btn btn-primary">Reserve Ahora</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
          <h2>Nuestros Servicios</h2>
          <p class="lead">quieres saber con que cuentas? pues ven y descubre todo los paquetesque traemos para Ti.</p>
          <p><img src="{{ asset('portal/img/curve.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="{{ asset('portal/img/flaticon/svg/001-building.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Hotel Unico en su Entorno</h3>
              <p>Disfruta de nuestros servicios y de nuestra amplia recepcion, Hotel unico en su espacio y mejor calidad de atencion.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="{{ asset('portal/img/flaticon/svg/003-restaurant.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Comida &amp; Bebidas</h3>
              <p> Si te gusta lo excepcional en gastronomia ven y disfruta con nosotros de las mejores comidas bebidas y cocteles que Atlantis trae para Ti.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="{{ asset('portal/img/flaticon/svg/004-parking.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Taxis A la Dispocion</h3>
              <p>Desde tu Llegada Hasta tu Salida puedes contar con la calidad de trabajadores taxistas listos a tu llamada.</p>
              <p><a href="#" class="link-with-icon">Leer Mas <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
          <h2>Habitaciones Olas de Mar</h2>
          <p class="lead">Disfruta de una comodidad al azul Extremo</p>
          <p><img src="{{ asset('portal/img/curve.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
      </div>
      <div class="row probootstrap-gutter10">
        <div class="col-md-6">
          <div class="probootstrap-block-image-text">
            <figure>
              <a href="{{ asset('portal/img/cora.jpg') }}" class="image-popup">
                <img src="{{ asset('portal/img/cora.jpg') }}" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
              </a>
              <div class="actions">
                <a href="https://vimeo.com/45830194" class="popup-vimeo"><i class="icon-play2"></i></a>
              </div>
            </figure>
            <div class="text">
              <h3><a href="#">Habitacion Coral</a></h3>
              <div class="post-meta">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 20 comentarios</li>
                  <li><i class="icon-user2"></i> 3 Huespedes</li>
                </ul>
              </div>
              <p>Si Te Gusta Pensar y Estar en Tranqulidad esta Habitacion es Ideal para Ti con Una Vista Unica</p>
              <p><a href="#" class="btn btn-primary">Desde BsS.1500,00</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-block-image-text">
            <figure>
              <a href="{{ asset('portal/img/atardecer.jpg') }}" class="image-popup">
              <img src="{{ asset('portal/img/atardecer.jpg') }}" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
              </a>
              <div class="actions">
                <a href="https://vimeo.com/45830194" class="popup-vimeo"><i class="icon-play2"></i></a>
              </div>
            </figure>
            <div class="text">
              <h3><a href="#">Habitacion Atardecer</a></h3>
              <div class="post-meta">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 31 Comentarios</li>
                  <li><i class="icon-user2"></i> 8 Huespedes</li>
                </ul>
              </div>
              <p>Nueva en Nuestras Instalaciones , Disfruta de una Magnifica Estadia y Disfruta de lo Maravilloso de la Naturaleza </p>
              <p><a href="#" class="btn btn-primary">Desde BsS.1700,00</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="probootstrap-half">
    <div class="image" style="background-image: url({{ asset('portal/img/5estrellas1.jpg') }});"></div>
    <div class="text">
      <div class="probootstrap-animate fadeInUp probootstrap-animated">
        <h2 class="mt0">Hotel Atlantas</h2>
        <p><img src="{{ asset('portal/img/curve_white.svg') }}" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
        <div class="row">
          <div class="col-md-6">
            <p>..Gran Hotel Atlantis.</p>    
          </div>
          <div class="col-md-6">
            <p>...el hotel que les brinda muchas posibilidades de descansar y llenarse de energia para seguir adelante</p>    
          </div>
        </div>
        <p><a href="#" class="link-with-icon white">Leer Mas <i class=" icon-chevron-right"></i></a></p>
      </div>
    </div>
  </section>

  <!-- START: footer -->
  <footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-md-12 text-center">
          <ul class="probootstrap-footer-social">
            <li><a href=""><i class="icon-twitter"></i></a></li>
            <li><a href=""><i class="icon-facebook"></i></a></li>
            <li><a href=""><i class="icon-instagram2"></i></a></li>
          </ul>
          <p>
            <small>&copy; 2018 <a href="https://uicookies.com/" target="_blank">Hotel Atlantis</a>Bienvenidos A Nuestra Familia</small>
          </p>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- END: footer -->

  <script src="{{ asset('portal/js/scripts.min.js') }}"></script>
  <script src="{{ asset('portal/js/main.min.js') }}"></script>
  <script src="{{ asset('portal/js/custom.js') }}"></script>


  </body>
</html>