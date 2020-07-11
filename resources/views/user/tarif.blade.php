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
    <div class="form-group">
        <div class="form-row">
            <div class="col col-2">Nama Expedisi</div>
            <div class="col">
                <select name="expedisi" class="form-control" id="expedisi">
                    <option selected="selected" disabled="disabled"></option>
                    @foreach($expedisi as $ex)
                    <option value="{{ $ex->id }}">{{ $ex->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlInput1">Berat Barang</label>
            <input type="number" name="berat" value="1" class="form-control" id="berat">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Satuan</label>
            <select class="form-control" name="satuan" id="satuan">
                <option selected="selected" disabled="disabled"></option>
            </select>
          </div>
        </div>
      </div>

          <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <label for="dari">Dari</label>
                        <input type="text" name="dari" value="Surabaya" id="dari" class="form-control">
                    </div>
                    <div class="col">
                        <label for="dari">Tujuan</label>
                        <select name="tujuan" class="form-control" id="tujuan">
                            <option value="Ambon">Ambon</option>
                        </select>
                    </div>
                </div>
            </div>
              <div class="row form-group">
                <div class="col-md-12 mt-3">
                  <input type="button" id="hitung" value="CEK TARIF" class="btn btn-primary  btn-lg  py-2 px-5">
                </div>
              </div>
              <h1 class="text-center" id="harga"></h1>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function(){
            $('#expedisi').change(function () {
                var id = $(this).find(":selected").val();
                $('#idExpedisi').val(id);
                $.ajax({
                url:"{{url('getExpedisi')}}",
                type:"POST",
                data:{id:id},
                success:function (data) {
                    $('#satuan').empty();
                    $("#satuan").append(new Option("","" ));
                    $.each(data, function(index, value) {
                        $("#satuan").append(new Option(value.berat, value.harga ));
                    });
                    $('#hitung').click(function (e) {
                        e.preventDefault();
                        var a = $('#satuan').find(":selected").val();
                        var berat = $('#berat').val();
                        $('#harga').html("Rp. "+a*berat);
                    });
                }
            })

    });

            });
    </script>

@endsection
