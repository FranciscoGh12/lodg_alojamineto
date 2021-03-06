@extends('welcome')
@section('front-content')
<div class="site-blocks-cover inner-page-cover overlay"
    style="background-image: url('{{asset('frontend/images/tlacotalpan2.jpg')}}')" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1>Alojamientos</h1>
                        <p data-aos="fade-up" data-aos-delay="100">El alojamiento que buscas </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    @foreach ($lodgs as $lodg)
                <div class="d-block d-md-flex listing-horizontal">
                    <a href="{{route('lodgment.show',$lodg->id)}}" class="img d-block"
                        style="background-image: url('{{ asset('uploads/lodgments/'.$lodg->picture_lodg) }}')">
                        <span class="category">{{$lodg->type_lodg}}</span>
                    </a>
                    <div class="lh-content">
                        <a href="{{route('lodgment.show',$lodg->id)}}" class="bookmark"><span class="fa fa-eye fa-2x"></span></a>
                    <h3><a href="#">{{$lodg->name_lodg}}</a></h3>
                    <p>{{$lodg->description_lodg}}</p>
                    </div>

                </div>

                @endforeach
                <div class="col-12 mt-5 text-center">
                    <div class="custom-pagination">
                        <span>1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <span class="more-page">...</span>
                        <a href="#">10</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 ml-auto">

                <div class="mb-5">
                    <h3 class="h5 text-black mb-3">Filters</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <div class="select-wrap">
                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                <select class="form-control" name="" id="">
                                        <option value="">Alojamiento</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Posada">Posada</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                                <div class="select-wrap">
                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                    <select class="form-control" name="" id="">
                                            <option value="">Habitacion</option>
                                    @foreach ($typeR as $type)
                                <option value="{{$type->id}}">{{$type->type_room}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>


                        <div class="form-group">
                            <!-- select-wrap, .wrap-icon -->
                            <div class="wrap-icon">
                                <span class="icon icon-room"></span>
                                <input type="text" placeholder="TLACOTALPAN" class="form-control" disabled>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <p>Rango de precio</p>
                        </div>
                        <div class="form-group">
                            <input type="range" min="200" max="1500" value="20" data-rangeslider>
                        </div>
                    </form>
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
