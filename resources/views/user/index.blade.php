@extends('layouts.user')
@section('Home', 'nav-item active')
@section('content')
<style>
    .gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}
.color img{
filter: grayscale(100%);
-webkit-filter: grayscale(100%);
-webkit-transition: all 1s ease;
}

.color img:hover{
filter: grayscale(0%);
filter: gray;
-webkit-filter: grayscale(0%);
filter: none;
transition: 1s ease;
}
  </style>
<div class="hero-wrap img" style="background-image: url({{asset('image/home.gif')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-10 d-flex align-items-center ftco-animate">
              <div class="text text-center pt-5 mt-md-5">
              <h1 class="mb-5">Pengiriman barang yang <strong>cepat dan aman</strong> via kapal laut</h1>
                          <div class="ftco-counter ftco-no-pt ftco-no-pb">
                  </div>
                          <div class="ftco-search my-md-5">
                              <div class="row">
                      <div class="col-md-12 nav-link-wrap">
                          <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Estimasi Biaya Tujuan Ambon</a>
<!--
                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Tracking</a> -->

                          </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                          <div class="tab-content p-4" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                <form action="#" class="search-job">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-user"></span></div>
                                <select class="form-control" name="expedisi" id="expedisi">
                                    <option selected="selected" disabled="disabled">Expedisi</option>
                                    @foreach($expedisi as $ex)
                                    <option value="{{ $ex->id }}">{{ $ex->nama }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"></div>
                                  <input type="number" class="form-control" name="berat" value="1" id="berat" placeholder="Berat">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <select name="berat" id="satuan" class="form-control">
                                    <option selected="selected" disabled="disabled">Satuan</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <button type="button" id="hitung" class="form-control btn btn-primary">Hitung</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h1 class="text-center text-dark mt-3" id="harga"></h1>
                      </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
          </div>
          </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="category-wrap">
                      <div class="row no-gutters">
                          <div class="col-md">
                              <div class="top-category text-center no-border-left">
                                  <h3><a href="#">Kapal Pelni</a></h3>
                                  <span class="icon "><i class="fas fa-ship"></i></span>
                              </div>
                          </div>
                          <div class="col-md">
                              <div class="top-category text-center">
                                  <h3><a href="#">Pesawat</a></h3>
                                  <span class="icon "><i class="fas fa-plane"></i></span>
                              </div>
                          </div>
                          <div class="col-md">
                              <div class="top-category text-center">
                                  <h3><a href="#">kapal Cargo</a></h3>
                                  <span class="icon "><i class="fas fa-th-large"></i></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-0">Wilayah Expedisi</h2>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6 ftco-animate">
            <ul class="category text-center">
                <li><a href="#">Provinsi Papua <br><span class="number">200</span> <span>Pulau</span><i class="ion-ios-arrow-forward"></i></a></li>
                <li><a href="#">Provinsi Papua Barat<br><span class="number">200</span> <span>Pulau</span><i class="ion-ios-arrow-forward"></i></a></li>
            </ul>
        </div>
        <div class="col-md-6 ftco-animate">
            <ul class="category text-center">
                <li><a href="#">Provinsi Maluku Utara<br><span class="number">200</span> <span>Pulau</span><i class="ion-ios-arrow-forward"></i></a></li>
          <li><a href="#">Provinsi Maluku <br><span class="number">200</span> <span>Pulau</span><i class="ion-ios-arrow-forward"></i></a></li>
            </ul>
        </div>
    </div>
    </div>
</section>

  <section class="ftco-section services-section">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class=""><i class="fas  fa-shipping-fast"></i></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Pengiriman cepat dan aman</h3>
              <p>Kami mempunyai pelayanan ekspedisi jasa pengiriman barang cepat dan aman adalah prioritas kami</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class=""><i class="fas fa-map-marked-alt"></i></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Door to Door</h3>
              <p> layanan dimana barang yang hendak di kirimkan akan dijemput oleh kurir ke tempat barang costumer berada, kemudian akan di antarkan sampai ke tangan penerima di tempat ditujuan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class=""><i class="fas fa-money-bill-alt"></i></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Tarif expedisi murah</h3>
              <p>Dengan layanan Rizalgo ekspedisi yang kami berikan adalah salah satu jasa pengiriman terbaik yang menawarkan tarif murah</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="container-fluid">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-0 mt-5">Dokumentasi Ekspedisi</h2>
            <div class="cardg">
                <div class="card-body">
                    <div class="gallery color" id="gallery">
                        <div class="mb-3 pics animation all 2">
                            <img class="img-fluid" src="{{asset('image/p5.jpg')}}" alt="Card image cap">
                        </div>
                        <div class="mb-3 pics animation all 2">
                            <img class="img-fluid" src="{{asset('image/m1.jpg')}}" alt="Card image cap">
                        </div>
                        <div class="mb-3 pics animation all 1">
                            <img class="img-fluid" src="{{asset('image/p4.jpg')}}" alt="Card image cap">
                        </div>
                        <div class="mb-3 pics animation all 2">
                            <img class="img-fluid" src="{{asset('image/p7.jpg')}}" alt="Card image cap">
                        </div>
                        <div class="mb-3 pics animation all 1">
                            <img class="img-fluid" src="{{asset('image/p1.jpg')}}" alt="Card image cap">
                        </div>
                        <div class="mb-3 pics animation all 1">
                            <img class="img-fluid" src="{{asset('image/p2.jpg')}}" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <script>
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            $('#expedisi').change(function () {
                var id = $(this).find(":selected").val();
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
  </script>
@endsection
