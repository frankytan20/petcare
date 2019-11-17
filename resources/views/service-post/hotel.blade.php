<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title') Petcare App</title>
  <link rel="icon" type="image/css" href="{{url('favicon.png')}}">

  <!-- Bootstrap core CSS -->
  <link href="{{url('theme-service/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('theme-app/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{url('theme-service/css/agency.css')}}" rel="stylesheet">

</head>

<body id="service">

  <!-- Navigation -->
@extends('pages.navbar')

  <section class="page-section" id="service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading text-uppercase">Pet - Hotel</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="serviceForm" name="serviceHealths" novalidate="novalidate" method="POST" action="{{route('post.healths')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="pet_name" type="text" placeholder="Pet Name *" required="required" data-validation-required-message="Please enter your pet name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="type" type="text" placeholder="Your Type Of Animal *" required="required" data-validation-required-message="Please enter type of animal.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="age" type="text" placeholder="Your Animal Age *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="owner_name" type="text" placeholder="Name Of Owner *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone Number *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="address" placeholder="Your Address *" required="required" data-validation-required-message="Please enter your address."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <h3>Checkin</h3>
                  <input type="date" name="checkin">
                  <p></p>
                  <h3>Checkout</h3>
                  <input type="date" name="checkout">
                </div>
              </div>
              <p></p>
              <p></p>
              <p></p>
              <div class="col-md-6">
              <div class="col-lg-12 text-center">
                <div id="success">
               <center><button id="sendHotelOrder" class="btn btn-primary btn-xl text-uppercase" type="submit">Order Now</button></center>
               </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
@extends('pages.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('theme-app/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('theme-app/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{url('theme-app/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{url('theme-app/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{url('theme-app/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{url('theme-app/js/agency.min.js')}}"></script>

</body>

</html>