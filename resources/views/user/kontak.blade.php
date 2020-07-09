@extends('layouts.user')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/kontak.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak</span></p>
          <h1 class="mb-3 bread">Kontak Kami</h1>
        </div>
      </div>
    </div>
  </div>

      <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h3">Contact Information</h2>
        @foreach ($perusahaan as $pr)
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Alamat:</span>{{$pr->alamat}}</p>
        </div>
        <div class="col-md-3">
          <p><span>Telefon:</span>{{$pr->nomor}}</p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
        @endforeach
      </div>
      <div class="row block-9">

        <div class="col-md-6 order-md-last d-flex">
          <form action="{{url('MasukPesan')}}" method="post" class="bg-white p-5 contact-form">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama Anda" name="nama" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Anda" name="email" required>
            </div>
            <div class="form-group">
              <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Tulis Pesan" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
        </div>
      </div>
    </div>
  </section>
@endsection
