<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lodg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Francisco Garcia Hernandez" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('jquery/jquery.datetimepicker.css')}}" />
    <script src="{{asset('jquery/jquery.js')}}"></script>
    <script src="{{asset('jquery/build/jquery.datetimepicker.full.min.js')}}"></script>

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-11 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="index.html" class="text-white h2 mb-0"><img
                                    class="lodg-logo" src="{{url('frontend/images/logolodg.png')}}" alt=""></a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active"><a href="{{route('index')}}"><span>Home</span></a></li>
                                <li><a href="{{route('lodgment.index')}}"><span>Alojamiento</span></a></li>
                                <li><a href="{{route('about')}}"><span>Nosotros</span></a></li>
                                <li><a href="{{route('contact')}}"><span>Contacto</span></a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                class="icon-menu h3"></span></a></div>

                </div>

            </div>
    </div>

    </header>



    <!-----------Contenido------------------>
    @yield('front-content')
    <!------------------------------->

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                            <h2 class="footer-heading mb-4">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Reserva</a></li>
                                <li><a href="#">Contacto</a></li>
                                <li><a href="#">Alojamientos</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                            <h2 class="footer-heading mb-4">Registro</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">Click Aqui</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                            <h2 class="footer-heading mb-4">Redes Sociales</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-transparent" placeholder="Enter Email"
                                aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button"
                                    id="button-addon2">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5">
                <div class="col-12 text-md-center text-left">
                    <p>
                        <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy; 2019 <strong class="text-black">Francisco Garcia Hernandez</strong><br>
                        Design by <a href="http://www.code-t.com.mx" target="_blank" class="text-black">Code-T</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.es.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('frontend/js/aos.js')}}"></script>
    <script src="{{asset('frontend/js/rangeslider.min.js')}}"></script>


    <script src="{{asset('frontend/js/typed.js')}}"></script>
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["Alojamiento"," Posadas"," Hoteles", " Bienvenido"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
    </script>
    <script>
        $( function() {
    $( "#datetimepicker1" ).datepicker();
  } );
    </script>
    <script>
        $(document).ready(function(){
        $("#startdate").datepicker({
    todayBtn:  true,
    language: 'es',
    autoclose: true,
    format: "yyyy-mm-dd",
    showMeridian: true
    }).on('changeDate', function (selected) {
    var minDate = new Date(selected.date.valueOf());
    $('#enddate').datepicker('setStartDate', minDate);
    $('#enddate').datepicker('setDate', minDate); // <--THIS IS THE LINE ADDED
    });

    $("#enddate").datepicker({
    todayBtn:  true,
    autoclose: true,
    language: 'es',
    format: "yyyy-mm-dd",
    showMeridian: true
    })
    .on('changeDate', function (selected) {
        var maxDate = new Date(selected.date.valueOf());
        $('#startdate').datepicker('setEndDate', maxDate);
    });

    });
    </script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    {!! Toastr::message() !!}
</body>

</html>
