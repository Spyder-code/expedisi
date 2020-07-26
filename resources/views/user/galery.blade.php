@extends('layouts.user')
@section('Galery', 'nav-item active')
@section('Home', 'nav-item')
@section('Tarif', 'nav-item')
@section('Kontak', 'nav-item')
@section('content')

<style>

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 3rem
 }

 .owl-carousel .item {
     margin: 3px
 }

 .owl-carousel .item img {
     display: block;
     width: 100%;
     height: auto
 }

 .owl-carousel .item {
     margin: 3px
 }

 .owl-carousel {
     margin-bottom: 15px
 }
</style>

<div class="hero-wrap hero-wrap-2 " style="background-image: url('{{asset('image/awan.jpg')}}');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text align-items-end justify-content-start">
    <div class="col-md-12 ftco-animate text-center mb-5">
      <h1 class="mb-3 bread">GALLERY RIZALGO</h1>
    </div>
  </div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col col-sm-4 mt-5 mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('image/p1.jpg')}}" style="height: 600px" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('image/p2.jpg')}}" style="height: 600px" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('image/p4.jpg')}}" style="height: 600px" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="col col-md text-center">
            <h3 class="mt-3">Gallery Ekspedisi</h3>
            <hr>
            <div class="row mt-3">
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="card">
                        <img src="{{asset('image/p4.jpg')}}" class="img-thumbnail" style="height: 180px; width:100%" alt="image" />
                        <p>Caption</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col col-sm text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section">
    <div class="container">
        <div class="owl-carousel text-center">
            <div class="item card">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204140/banner_12.jpg" alt="image" />
                <p>Caption</p>
            </div>
            <div class="item card">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204140/banner_12.jpg" alt="image" />
                <p>Caption</p>
            </div>
            <div class="item card">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204140/banner_12.jpg" alt="image" />
                <p>Caption</p>
            </div>
            <div class="item card">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204140/banner_12.jpg" alt="image" />
                <p>Caption</p>
            </div>
        </div>
    </div>
</section>

{{-- modal 4 --}}
  <div class="modal fade" id="a4" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{asset('image/p4.jpg')}}" style="height: 700px; width:100%" class="img-thumbnail" >
        </div>
      </div>
    </div>
  </div>

  <script>
     $(function () {
        $(".owl-carousel").owlCarousel({
            autoplay:true,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            center: true,
            nav:true,
            loop:true,
            responsiveClass: true,
            responsive: {
                0:{
                items: 1
                },
                480:{
                items: 3
                },
                769:{
                items: 6
                }
            }
        });
    })
  </script>

@endsection
