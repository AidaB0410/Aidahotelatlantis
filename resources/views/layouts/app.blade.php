<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Hotel Atlantis</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('administrador/assets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('administrador/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('administrador/assets/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('administrador/assets/js/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('administrador/assets/lineicons/style.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('administrador/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('administrador/assets/css/style-responsive.css') }}" rel="stylesheet">


</head>

<body>

    <section id="container">
        <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Hotel Atlantis</b></a>
            <!--logo end-->

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            class="logout">Salir</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="#"><img src="{{asset('administrador/assets/img/ui-sam.jpg') }}" class="img-circle"
                                width="60"></a></p>
                    <h5 class="centered">Aida Blanco</h5>
                    <h5 class="centered">Administradora</h5>

                    <li class="mt">
                        <a class="active" href="{{ url('/home')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>Cuartos</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('cuartos.index')}}">Listar</a></li>
                            <li><a href="{{ route('cuartos.create')}}">Registrar</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span>Clientes</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('clientes.index')}}">Listar</a></li>
                            <li><a href="{{ route('clientes.create')}}">Registrar</a></li>
                        </ul>
                    </li>



                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="row">
                    <div class="col-lg-9 main-chart">

                        @yield("content")

                    </div><!-- /col-lg-9 END SECTION MIDDLE -->
                </div>
            </section>
        </section>

        <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('administrador/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('administrador/assets/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('administrador/assets/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('administrador/assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('administrador/assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('administrador/assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('administrador/assets/js/jquery.sparkline.js') }}"></script>


    <!--common script for all pages-->
    <script src="{{ asset('administrador/assets/js/common-scripts.js') }}"></script>

    <script type="text/javascript" src="{{ asset('administrador/assets/js/gritter/js/jquery.gritter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrador/assets/js/gritter-conf.js') }}"></script>

    <!--script for this page-->
    <script src="{{ asset('administrador/assets/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('administrador/assets/js/zabuto_calendar.js') }}"></script>




</body>

</html>