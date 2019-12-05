@extends('welcome')
@section('front-content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('frontend/images/Tlacotalpan1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h1>Reservacion</h1>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mb-5"  data-aos="fade">



          <form action="#" class="p-5 bg-white" style="margin-top: -150px;">


            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">Nombre: </label>
                <input type="text" id="cnombre" class="form-control" placeholder="Nombre del huesped">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Movil</label>
                <input maxlength="10" type="text" id="movil" class="form-control" placeholder="Telefono Movil">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="email">Email: </label>
                <input type="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">

                    <div class="col-md-12">
                            <div class="label-floating">
                                <label class="control-label">Voucher:</label>
                                <input class="form-control" type="file" name="voucher" id="voucherLodg">
                            </div>
                    </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Enviar" class="btn btn-primary btn-md text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-md-5"  data-aos="fade" data-aos-delay="100">

          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Hotel</p>
            <p class="mb-4">Para cualquier duda o aclaracion comunicarse al telefono o al
                correo electronico.</p>

            <p class="mb-0 font-weight-bold">Habitacion:</p>
            <p class="mb-4"><a href="#">+52 229 4235 324</a></p>

            <p class="mb-0 font-weight-bold">Monto:</p>
            <p class="mb-0"><a href="#">hello.lodg@lodgment.com</a></p>

          </div>

          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Aviso</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
