@extends('layouts.user')
@section('Lacak', 'nav-item active')
@section('Home', 'nav-item')
@section('Tarif', 'nav-item')
@section('Kontak', 'nav-item')
@section('content')
<div class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('{{asset('image/sea.gif')}}');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text align-items-end justify-content-start">
    <div class="col-md-12 ftco-animate text-center mb-5">
      <h1 class="mb-3 bread">LACAK KIRIMAN</h1>
      <div class="row d-flex justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <div class="row d-flex justify-content-center mt-4 mb-4">
          <div class="col-md-12">
            <form class="subscribe-form"  method="get" action="{{url('TampilLacak')}}">
              <div class="form-group d-flex">
                @csrf
                <input type="text" class="form-control text-center" name="cari" placeholder="Masukkan kode kiriman">
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
@endsection
