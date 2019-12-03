@extends('welcome')
@section('front-content')

<div class="site-blocks-cover overlay" style="background-image: url('frontend/images/TLACOTALPAN.jpg');"
data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
    <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10">


            <div class="row justify-content-center mb-4">
                <div class="col-md-10 text-center">
                    <h1 data-aos="fade-up">LODG <span class="typed-words"></span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">El alojamiento que buscas y necesitas.</p>
                </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
                <form method="post">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-3">
                            <div class="select-wrap">
                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                <select class="form-control" name="" id="">
                                    <option value="">Alojamiento</option>
                                    <option value="">Hotel</option>
                                    <option value="">Posada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-3">
                            <div class="select-wrap">
                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                <select class="form-control" name="" id="">
                                    <option value="">Habitacion</option>
                                    <option value="">Individual</option>
                                    <option value="">Matrimonial</option>
                                    <option value="">Doble</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                            <div class="wrap-icon">
                                <span class="icon icon-room"><label for="icon">TLACOTALPAN</label></span> <br>
                            </div>

                        </div>

                        <div class="col-lg-12 col-xl-2 ml-auto text-right">
                            <input type="submit" class="btn text-white btn-primary" value="Search">
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>


<div class="site-section">
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Categorias</h2>
            <p class="color-black-opacity-5">
                Selecciona alguna categoria de alojamientos, vive la experiencia reservando con nosotros.
            </p>
        </div>
    </div>

    <div class="row d-flex justify-content-center align-items-stretch">
        <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
                <span class="icon mb-3"><span class="fa fa-hospital-o"></span></span>
                <span class="caption mb-2 d-block">Hoteles</span>
                <span class="number">89</span>
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
                <span class="icon mb-3"><span class="fa fa-bed"></span></span>
                <span class="caption mb-2 d-block">Posadas</span>
                <span class="number">82</span>
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
                <span class="icon mb-3"><span class="fa fa-book"></span></span>
                <span class="caption mb-2 d-block">Reservasiones</span>
                <span class="number">2194</span>
            </a>
        </div>
    </div>

    <div class="row mt-5 justify-content-center tex-center">
        <div class="col-md-4"><a href="#" class="btn btn-block btn-outline-primary btn-md px-5">
                Ver Mas
            </a></div>
    </div>
</div>
</div>


<div class="site-section" data-aos="fade">
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Promociones</h2>
            <p class="color-black-opacity-5">
                Las mejores promociones para tu alojamiento se encuentran aqui.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

            <div class="listing-item">
                <div class="listing-image">
                    <img src="images/img_1.jpg" alt=""
                        class="img-fluid">
                </div>
                <div class="listing-item-content">
                    <a href="listings-single.html" class="bookmark" data-toggle="tooltip" data-placement="left"
                        title="Bookmark"><span class="icon-heart"></span></a>
                    <a class="px-3 mb-3 category" href="#">Hotels</a>
                    <h2 class="mb-1"><a href="listings-single.html">Luxe Hotel</a></h2>
                    <span class="address">West Orange, New York</span>
                </div>
            </div>

        </div>
    </div>
</div>
</div>



<div class="site-section">
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">¿Como Reservar?</h2>
            <p class="color-black-opacity-5">
            Con tan solo un click podras disfrutar del mejor alojamiento que nosotros te ofrecemos.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
                <div class="img-wrap">
                <img src="{{url('frontend/images/steps/step1.png')}}" alt="Step1 Buscar"
                        class="img-fluid">
                </div>
                <span class="number">1</span>
                <h3>Busca y selecciona el mejor alojamiento</h3>
                <p>
                    Busca entre la variedad de alojamientos y selecciona el mejor para ti con un
                    precio accesible.
                </p>
            </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
                <div class="img-wrap">
                        <img src="{{url('frontend/images/steps/step2.png')}}" alt="Step2 Reservar"
                        class="img-fluid">
                </div>
                <span class="number">2</span>
                <h3>Reservar</h3>
                <p>
                    Si tu alojamiento esta disponible, es hora de reservar.
                </p>
            </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
                <div class="img-wrap">
                        <img src="{{url('frontend/images/steps/step3.png')}}" alt="Step3 Disfrutar"
                        class="img-fluid">
                </div>
                <span class="number">3</span>
                <h3>Disfruta la experiencia</h3>
                <p>
                    Relajate y ponte comodo en tu alojamiento, porque has hecho una exelente eleccion.
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="site-section bg-light">
<div class="container">

    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Lugares de interes</h2>
        </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

        <div>
            <div class="testimonial">
                <img src="{{url('frontend/images/places/candelaria.jpg')}}"
                    alt="Free Website Template by Free-Template.co" class="img-fluid mb-1">
                <div  class="carousel-caption">
                    <div style="background-color:rgba(0, 0, 0, .5)">
                            <h3>Iglesia de la candelaria</h3>
                            <p>Hogar de la virgen de la candelaria</p>
                    </div>

                </div>
            </div>
        </div>
        <div>
            <div class="testimonial">
                <img src="{{url('frontend/images/places/teatro.jpg')}}"
                    alt="Free Website Template by Free-Template.co" class="img-fluid mb-1">
                <div class="carousel-caption">
                        <div style="background-color:rgba(0, 0, 0, .5)">
                                <h3>Teatro</h3>
                                <p>Hogar de la virgen de la candelaria</p>
                        </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial">
                <img src="{{url('frontend/images/places/casacultura1.jpg')}}"
                    alt="Free Website Template by Free-Template.co" class="img-fluid mb-1">
                <div class="carousel-caption">
                        <div style="background-color:rgba(0, 0, 0, .5)">
                                <h3>Casa de la cultura</h3>
                                <p>Hogar de la virgen de la candelaria</p>
                        </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial">
                <img src="{{url('frontend/images/places/restaurante.jpg')}}"
                    alt="Free Website Template by Free-Template.co" class="img-fluid mb-1">
                <div class="carousel-caption">
                        <div style="background-color:rgba(0, 0, 0, .5)">
                                <h3>Restaurantes</h3>
                                <p>Hogar de la virgen de la candelaria</p>
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>



<div class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
                    <h2 class="mb-3 mt-0 text-white">Registrate. Crea tu cuenta</h2>
                    <p class="mb-0 text-white">Ponte en contacto con nosotros para registrarte </p>
                </div>
                <div class="col-lg-4">
                    <p class="mb-0"><a href="signup.html"
                            class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
