<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atlantis Hotel Resort</title>
   
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
            <li class="{{ active('/') }}"><a href="{{ url('/') }}">Inicio</a></li>

            <li><a href="{{ url('/habitaciones') }}">Habitaciones</a></li>

            <li class="hidden-xs probootstrap-logo-center"><a href="{{ url('/') }}"><img src="{{ asset('portal/img/logo_md.png') }}" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
            
            <li class="{{ active('login') }}"><a href="{{ route('login') }}">Inicio de Sesión</a></li>
            <li class="{{ active('register') }}"><a href="{{ route('register') }}">Registrar</a></li>
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

  <section class="probootstrap-slider flexslider probootstrap-inner" >
    <ul class="slides">
       <li style="background-image: url({{ asset('portal/img/slider_1.jpg') }});" class="overlay">
          <div class="container">
            <div class="row" >
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1>Iniciar sesión</h1>
                  <p><img src="{{ asset('portal/img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                 
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Coreo</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Contraseña</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Iniciar
                              </button>

                          </div>
                      </div>
                  </form>
                
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>
  
  <!-- END: footer -->
  
 
  
  <script src="{{ asset('portal/js/scripts.min.js') }}"></script>
  <script src="{{ asset('portal/js/main.min.js') }}"></script>
  <script src="{{ asset('portal/js/custom.js') }}"></script>

  </body>
</html>