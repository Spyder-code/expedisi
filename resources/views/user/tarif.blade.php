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

    <form action="{{url('CekTarif')}}" method="post" class="p-5 bg-white">
            @csrf
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlInput1">Berat Barang</label>
            <input type="text" name="berat" class="form-control" id="exampleFormControlInput1">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Satuan</label>
            <select class="form-control" name="satuan" id="exampleFormControlSelect1">
              <option selected="selected" disabled="disabled"></option>
              <option value="kilogram">Kilogram</option>
              <option value="Ton">Ton</option>
            </select>
          </div>
        </div>
      </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Expedisi</label>
            <select class="form-control" name="expedisi" id="expedisi">
            <option selected="selected" disabled="disabled"></option>
            @foreach($expedisi as $ex)
            <option data-tujuan="{{$ex->tujuan}}" data-harga="{{$ex->harga}}" value="{{ $ex->nama }}">{{ $ex->nama }}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"><span class="icon-map-marker"></span> Lokasi Tujuan</label>
            <input type="text" class="form-control" id="tujuan" name="tujuan" readonly="" value="Tujuan">
            <input type="hidden" name="harga" id="harga" class="form-control" readonly="" value="Harga">
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
            @foreach ($perusahaan as $pr)
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">{{$pr->alamat}}</p>
              <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4">{{$pr->nomor}}</p>
            @endforeach
            </div>
          </div>
        </div>

      </div>
    </section>
    <script>
        $(function(){
            $('#expedisi').change(function () {
                var a = $(this).find(':selected').attr('data-tujuan')
                    $('#tujuan').val(a);
            });
        });
    </script>
    {{-- <script>
        $(function(){
            $('#expedisi').change(function () {
                var a = $(this).find(':selected').attr('data-harga')
                    $('#harga').val(a);
            });
        });
    </script> --}}
@endsection
