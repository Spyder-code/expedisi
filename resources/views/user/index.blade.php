@extends('layouts.user')
@section('content')
<div class="hero-wrap img" style="background-image: url({{asset('image/user/hero_bg_4.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-10 d-flex align-items-center ftco-animate">
              <div class="text text-center pt-5 mt-md-5">
              <h1 class="mb-5">Pengiriman barang yang <strong>cepat dan aman</strong> via kapala laut</h1>

                          <div class="ftco-counter ftco-no-pt ftco-no-pb">
                      <div class="row">

                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                          <div class="block-18">
                            <div class="text d-flex">
                                <div class="icon mr-2">
                                    <span class="flaticon-worldwide"></span>
                                </div>
                                <div class="desc text-middle">
                                <strong class="number" data-number="{{$jumlah_expedisi}}">0</strong>
                                <span>Pulau</span>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                  </div>
                          <div class="ftco-search my-md-5">
                              <div class="row">
                      <div class="col-md-12 nav-link-wrap">
                          <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Estimasi Biaya</a>
<!--
                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Tracking</a> -->

                          </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                          <div class="tab-content p-4" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                <form action="#" class="search-job">
                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-user"></span></div>
                                <input type="text" class="form-control" name="berat" placeholder="Berat Barang">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="satuan" id="" class="form-control">
                                    <option selected="selected" disabled="disabled">Satuan</option>
                                    <option value="kilogram">Kilogram</option>
                                    <option value="Ton">Ton</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <input type="text" class="form-control" name="tujuan" placeholder="Lokasi Tujuan">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select class="form-control" name="expedisi" id="expedisi">
                                    <option selected="selected" disabled="disabled">Expedisi</option>
                                    @foreach($expedisi as $ex)
                                    <option data-tujuan="{{$ex->tujuan}}" data-harga="{{$ex->harga}}" value="{{ $ex->nama }}">{{ $ex->nama }}</option>
                                    @endforeach
                                    </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <button type="submit" class="form-control btn btn-primary">Hitung</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h1 class="text-center text-dark mt-3"></h1>
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
                                  <h3><a href="#">Kapal laut Pelni</a></h3>
                                  <span class="icon "><i class="fas fa-ship"></i></span>
                              </div>
                          </div>
                          <div class="col-md">
                              <div class="top-category text-center">
                                  <h3><a href="#">kapal Roro</a></h3>
                                  <span class="icon "><i class="fas fa-water"></i></span>
                              </div>
                          </div>
                          <div class="col-md">
                              <div class="top-category text-center">
                                  <h3><a href="#">kapal Cargo</a></h3>
                                  <span class="icon "><i class="fas fa-dolly-flatbed"></i></span>
                              </div>
                          </div>
                          <div class="col-md">
                              <div class="top-category text-center">
                                  <h3><a href="#"> Container</a></h3>
                                  <span class="icon "><i class="fas fa-box"></i></span>
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
        @foreach ($expedisi as $ex)
          <div class="col-md-6 ftco-animate">
            <ul class="category text-center">
                  <li><a href="#">{{$ex->nama}} <br><span class="number">200</span> <span>Wilayah</span><i class="ion-ios-arrow-forward"></i></a></li>
            </ul>
          </div>
          @endforeach
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
@endsection
