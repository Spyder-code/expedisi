@extends('layouts.user')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/depot_hero_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
          <h1 class="mb-3 bread">Estimasi Harga</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">

          <div class=" col-lg-8 mb-5 ">

          <form action="#" class="p-5 bg-white">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlInput1">Berat Barang</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Satuan</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Kilogram</option>
              <option>Koli</option>
              <option>Kubik</option>
              <option>Ton</option>
            </select>
          </div>
        </div>
      </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Satuan</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Kapal Pelni</option>
              <option>Kapal Cargo</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"><span class="icon-map-marker"></span> Lokasi Tujuan</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">

      </div>

              <div class="row form-group">
                <div class="col-md-12 mt-3">
                  <input type="submit" value="CEK TARIF" class="btn btn-primary  btn-lg  py-2 px-5">
                </div>
              </div>


            </form>

          </div>



          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Depo Temas jalan kalianak no 55L .SBY</p>
              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">081217073922</a></p>
            </div>
          </div>
        </div>

      </div>
    </section>
@endsection
