@extends('welcome')
@section('front-content')
<div class="site-blocks-cover inner-page-cover overlay"
    style="background-image: url({{asset('frontend/images/tlacotalpan3.jpg')}});" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1>Hotel/Posada &amp; Item</h1>
                        <p class="mb-0">Descripcion</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="mb-5 border-bottom pb-5">
                    <a href="{{route('lodgment.index')}}"><span class="fa fa-chevron-left fa-2x">Regresar</span></a>
                    <p>
                        <br> <br>
                        <img class="img-responsive img-thumbnail"
                            src="{{ asset('uploads/lodgments/'.$lodg->picture_lodg) }}"
                            style="height: 200px; width: 200px" alt="">


                        <h4>Direccion:</h4>
                        <p>{{$lodg->direction_lodg}}</p>
                        <h3>{{$lodg->name_lodg}}</h3>
                        <p>{{$lodg->description_lodg}}

                        </p>




                        <h2 class="mb-5 text-primary">Lista de habitaciones</h2>
                        @foreach ($rooms as $key=>$room)


                        <div class="d-block d-md-flex listing-horizontal">
                        <a href="" class="img d-block" style="background-image: url('{{asset('frontend/images/room.jpg')}}');">
                                <?php $tipo = DB::table('type_rooms')->where('id',$room->type_room_id)->get() ?>
                                @foreach ($tipo as $t)
                                <span class="category">

                                        {{$t->type_room}}

                                    </span>
                                @endforeach


                            </a>
                            <div class="lh-content">
                                <h3><a href="#">Precio ${{$room->prize_room}} MXN</a></h3>
                            <p>Descripccion: {{$room->description}}</p>
                                <p>Numero de habitacion: {{$room->num_room}} </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{route('reserv.show',$room->id)}}"
                                            class="btn btn-primary btn-small text-white">Reservar</a>
                                    </div>
                                </div>
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
                                    <option value="">Hotel</option>
                                    <option value="">Posada</option>
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
                <p class="mb-0 text-white">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
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
