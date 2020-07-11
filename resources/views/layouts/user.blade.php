<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rizalgo expedisi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    {{-- <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css"> --}}

{{--
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css"> --}}
    <link rel="stylesheet" href="{{asset('css/style-user.css')}}">
         <!--=== FontAwesome CSS ===-->
    <link href="{{asset('fontawesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('user/js/jquery.min.js')}}"></script>
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
	      <a class="navbar-brand" href="index.html">Rizalgo Ekspedisi</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="{{url('/lacak')}}" class="nav-link">Lacak</a></li>
				<li class="nav-item"><a href="{{url('/tarif')}}" class="nav-link">Cek Tarif</a></li>
				<li class="nav-item"><a href="{{url('/kontak')}}" class="nav-link">Kontak Kami</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang kami</h2>
              <h2 class="ftco-heading-2">Rizalgo Expedisi</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Lokasi</h2>
              <p>Dibawah ini akan ada map lokasi kantor.</p>
                <img src="../assets/img/Studioku.png" class="rounded-circle mr-sm-2 mb-4" style="width: 250px; height: 150px;">
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Hubungi kami</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

			<p>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Rizalgo Ekspedisi</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="{{asset('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('user/js/popper.min.js')}}"></script>
  <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('user/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('user/js/aos.js')}}"></script>
  <script src="{{asset('user/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('user/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="{{asset('js/main-user.js')}}"></script>

  </body>
</html>
