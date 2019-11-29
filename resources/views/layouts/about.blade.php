@extends('welcome')
@section('front-content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('frontend/images/tlacotalpan3.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h1>Sobre nosotros</h1>
              <p data-aos="fade-up" data-aos-delay="100">Conoce todo lo relacionado a nosotros </p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
        <img src="{{url('frontend/images/fgh.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid rounded">
        </div>
        <div class="col-md-5 ml-auto">
          <h2 class="text-primary mb-3">History</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
          <p class="mb-4">Adipisci dolore reprehenderit est et assumenda veritatis, ex voluptate odio consequuntur quo ipsa accusamus dicta laborum exercitationem aspernatur reiciendis perspiciatis!</p>

          <ul class="ul-check list-unstyled success">
            <li>Adipisci dolore reprehenderit</li>
            <li>Accusamus dicta laborum</li>
            <li>Delectus sed labore</li>
          </ul>
        </div>
      </div>
    </div>
  </div>




  <div class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
                <h2 class="mb-3 mt-0 text-white">Registrate. Crea tu cuenta</h2>
          <p class="mb-0 text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
        <div class="col-lg-4">
          <p class="mb-0"><a href="signup.html" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Sign Up</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection
