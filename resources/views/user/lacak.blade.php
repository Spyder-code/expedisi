@extends('layouts.user')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/sea.gif');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text align-items-end justify-content-start">
    <div class="col-md-12 ftco-animate text-center mb-5">
      <h1 class="mb-3 bread">LACAK KIRIMAN</h1>
      <div class="row d-flex justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <div class="row d-flex justify-content-center mt-4 mb-4">
          <div class="col-md-12">
            <form class="subscribe-form"  method="get" action="/TampilLacak">
              <div class="form-group d-flex">
                @csrf
                <input type="text" class="form-control" name="cari" placeholder="Masukkan kode kiriman">
                <input type="submit" value="TRACKING" class="submit px-3">
                {{-- <button type="submit" value="TRACKING" class="submit px-3"> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>

  <section class="ftco-section bg-light">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 pr-lg-4">
                  <div class="row justify-content-start">
                  </div>
              </div><!-- end -->
          </div>

          <div class="col-lg-3 sidebar">
            <div class="sidebar-box bg-white p-4 ftco-animate">
                <h3 class="heading-sidebar">Hubungi kami</h3>
                <form action="#" class="search-form mb-3">
                    <ul>
                        <li><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                        <li><a href="#"><span class="text">+2 392 3929 210</span></a></li>
                        <li><a href="#"><span class="text">info@yourdomain.com</span></a></li>
                      </ul>
                </form>
            </div>
            </div>
          </div>
        </div>

  </section>
@endsection
