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

  <section class="ftco-section bg-light">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 pr-lg-4">
                  <div class="row justify-content-start">
                      <div class="col-md-12 ftco-animate">
                      <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                      <div class="one-third mb-4 mb-md-0">
                          <div class="job-post-item-header align-items-center">
                          <h2 class="mr-3 mb-4 text-black"><a href="#">Data Kiriman</a></h2><hr>
                          </div>
                          @foreach ($data_lacak as $dtl)
                          <div class="job-post-item-body d-block">
                              <div class="row">
                                  <div class="col-4">
                                      <h5>Kode Pengiriman</h5>
                                  </div>
                                  <div class="col">
                                  <h5>{{$dtl->kode}}</h5>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-4">
                                      <h5>Layanan</h5>
                                  </div>
                                  <div class="col">
                                      <h5>{{$dtl->id_expedisi}}</h5>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-4">
                                      <h5>Tanggal Kirim</h5>
                                  </div>
                                  <div class="col">
                                      <h5>{{date('d F Y, H:m:s', strtotime($dtl->created_at))}}</h5>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-4">
                                      <h5>Pengirim</h5>
                                  </div>
                                  <div class="col">
                                      <h5>{{$dtl->pengirim}}</h5>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-4">
                                      <h5>Alamat Pengirim</h5>
                                  </div>
                                  <div class="col">
                                      <h5>{{$dtl->alamat_pengirim}}</h5>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-4">
                                      <h5>Penerima</h5>
                                  </div>
                                  <div class="col">
                                      <h5>{{$dtl->penerima}}</h5>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-4">
                                      <h5>Alamat Penerima</h5>
                                  </div>
                                  <div class="col">
                                      <h5>{{$dtl->alamat_penerima}}</h5>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                      </div>
                  </div>


              </div><!-- end -->
          </div>
          <div class="row justify-content-start">
                      <div class="col-md-12 ftco-animate">
                      <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                      <div class="one-third mb-4 mb-md-0">
                          <div class="job-post-item-header align-items-center">
                          <h2 class="mr-3 mb-4 text-black"><a href="#">Status Detail</a></h2><hr>
                          </div>
                          <div class="job-post-item-body d-block">
                              <table class="table table-bordered">
                                <thead>
                                  <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Keterangan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_lacak as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>
                                            @if ($item->status==0)
                                            <span class="text-warning"><i class="fa fa-list" aria-hidden="true"></i> Sortir </span>
                                            @elseif ($item->status==1)
                                            <span class="text-primary"><i class="fa fa-truck" aria-hidden="true"></i> Shipping Progress</span>
                                            @else
                                            <span class="text-success"><i class="fa fa-check" aria-hidden="true"></i> Receive on Destination </span>
                                            @endif
                                        </td>
                                        <td>{{date('d F Y, H:m:s', strtotime($item->updated_at))}}</td>
                                        <td>
                                            @if ($item->status==0)
                                            <span class="text-dark">Sortir barang dan pemberian label</span>
                                            @elseif ($item->status==1)
                                            <span class="text-dark">Proses pengiriman barang</span>
                                            @else
                                            <span class="text-dark">Barang sampai tujuan</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>


              </div><!-- end -->
          </div>

        </div>
        <div class="col-lg-3 sidebar">
          <div class="sidebar-box bg-white p-4 ftco-animate">
              <h3 class="heading-sidebar">Hubungi kami</h3>
              <form action="#" class="search-form mb-3">
                  <ul>
                      @foreach ($perusahaan as $pr)
                      <li><span class="text">{{$pr->alamat}}</span></li>
                      <li><span class="text">{{$pr->nomor}}</span></a></li>
                      <li><span class="text">info@rizalgo.com</span></a></li>
                      @endforeach
                    </ul>
              </form>
          </div>
          </div>
        </div>



      </div>
  </section>
@endsection
