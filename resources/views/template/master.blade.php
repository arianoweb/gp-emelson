<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ejercicios 1 y 2 de GEOPAGOS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="{{ asset('plantilla/assets/css/fonticons.css')}}">
        <link rel="stylesheet" href="{{ asset('plantilla/assets/fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{ asset('plantilla/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plantilla/assets/css/bootstrap.min.css')}}">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ asset('plantilla/assets/css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('plantilla/assets/css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('plantilla/assets/css/responsive.css')}}" />

        <script src="{{ asset('plantilla/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <section id="inicio" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service_area sections">
                        <div class="col-sm-6">
                            <div class="signle_service_left">
                                <h2>Ejercicos<br><br> GeoPagos!</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_service_left">

                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-screen"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>Detalles de la Evaluación</h3>
                                        <p>En el NavBar se encuentra los dos ejercicios de evaluación, el contenido se encuentra inicialisado en el Archivo HomeController.php,
                                         ademas de ello el resultado de el que titule ejercico dos se encuetra en SLIDES por cual deben ver los valores de la figuras deslizado
                                         cada SLIDE.
                                        <br>
                                         <p>
                                          Saludos y Gracias.
                                          <br>
                                          <b>Emelson Marquez</b>
                                        </p>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ejercicio1" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service_area sections">

                        <div class="col-sm-6">
                            <div class="single_service_right">

                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>Detalles de Usuario</h3>
                                        <p>@yield('usuarios')
                                        </p>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="signle_service_left">

                                <div class="single_service">
                                  <div class="single_service_icon">

                                  </div>

                                    <div class="single_service_content">
                                        <h3 ><i class="glyphicon glyphicon-usd"></i>Detalles de Pago</h3>
                                        <p>@yield('pago')
                                        </p>
                                        </p>


                                    </div>
                                </div>

                            </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="ejercicio2" class="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="1000ms">
                                        <h1>@yield('cuadrado_titulo')</h1>
                                        <p class="li_home">@yield('cuadrado_datos')</p>



                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="1000ms">
                                        <h1>@yield('circulo_titulo')</h1>
                                        <p  class="li_home">@yield('circulo_datos')</h2>


                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="1000ms">
                                        <h1>@yield('triangulo_titulo')</h1>
                                        <p class="subtitle">@yield('triangulo_datos')</p>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright_text">
                                <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="footer_socail">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-rss"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-dribbble"></i></a>
                                <a href=""><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="{{ asset('plantilla/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{ asset('plantilla/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{ asset('plantilla/assets/js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{ asset('plantilla/assets/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{ asset('plantilla/assets/js/jquery.easing.1.3.js')}}"></script>

        <script src="{{ asset('plantilla/assets/js/plugins.js')}}"></script>
        <script src="{{ asset('plantilla/assets/js/main.js')}}"></script>

    </body>
</html>
