<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rizalgo expedisi</title>
    <meta charset="utf-8">
    <meta name="description" content="Ekspedisi laut tujuan maluku, ambon, papua. Door to door, tracking real time, dan tarif murah">
    <meta name="keywords" content="rizalgo, Rizalgo, rizalgo ekspedis, ekspedisi ambon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="icon" href="{{asset('image/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style-user.css')}}">
         <!--=== FontAwesome CSS ===-->
    <link href="{{asset('fontawesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('user/js/jquery.min.js')}}"></script>
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('image/logo.png')}}" alt="">
        </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="@yield('Home')"><a href="{{url('/')}}" class="nav-link">Home</a></li>
            <li class="@yield('Lacak')"><a href="{{url('/lacak')}}" class="nav-link">Lacak</a></li>
            <li class="@yield('Tarif')"><a href="{{url('/tarif')}}" class="nav-link">Cek Tarif</a></li>
            <li class="@yield('Kontak')"><a href="{{url('/kontak')}}" class="nav-link">Kontak Kami</a></li>
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
              <p>Pengiriman cepat dan aman, Door to Door, Tarif expedisi murah</p>
              {{-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul> --}}
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Lokasi</h2>
              <p>Dibawah ini akan ada map lokasi kantor.</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0320804364733!2d112.70214129675121!3d-7.237180430477901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ff8433e03503%3A0x8ee50aa3f9b8acbe!2sDepo%20Temas!5e0!3m2!1sid!2sid!4v1594472572352!5m2!1sid!2sid" width="250" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                {{-- <img src="../assets/img/Studioku.png" class="rounded-circle mr-sm-2 mb-4" style="width: 250px; height: 150px;"> --}}
            </div>
          </div>
          @php( $perusahaan = \App\Company::all())
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Hubungi kami</h2>
            	<div class="block-23 mb-3">
	              <ul>
                    @foreach ($perusahaan as $pr)
	                <li><span class="icon icon-map-marker"></span><span class="text">{{$pr->alamat}}</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">{{$pr->nomor}}</span></a></li>
                    <li><span class="icon icon-envelope"></span><span class="text">info@rizalgo.com</span></a></li>
                    @endforeach
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
    <div id="ftco-loader" class="show fullscreen" style="text-align: center; top:50%">
        <img src="{{asset('image/logo.png')}}">
    </div>



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
  <script>
      $("ul li").on("click", function () {
          $("li").removeClass("active");
          $(this).addClass("active");
      });
  </script>
  </body>
</html>
