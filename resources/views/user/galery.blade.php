@extends('layouts.user')
@section('Galery', 'nav-item active')
@section('Home', 'nav-item')
@section('Tarif', 'nav-item')
@section('Kontak', 'nav-item')
@section('content')

<style>

/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
.a{
    height: 400px;
    width: 100%;
}
.b{
    height: 180px;
    width: 100%;
}
 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }
 @media only screen and (max-width: 600px){
        .a{
            min-width:500px;
        }
        .b{
            height:100px;
        }
        .carousel-inner{
            max-width: 700px;
        }
        .card-item{
            min-width:120px;
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
      <h1 class="mb-3 bread">GALLERY EKSPEDISI</h1>
    </div>
  </div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col col-sm-4 mt-2 mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($data3 as $item)
                        @if ($item->id==1)
                        <div class="carousel-item active">
                            <img class="a img" src="{{asset('image/gallery/'.$item->gambar)}}" style="height: 400px" alt="{{$item->caption}}">
                        </div>
                        @else
                        <div class="carousel-item">
                            <img class="a img" src="{{asset('image/gallery/'.$item->gambar)}}" style="height: 400px" alt="{{$item->caption}}">
                        </div>
                        @endif
                    @endforeach
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
        <div class="col col-sm-8 text-center">
            <div class="row mt-2">
                @foreach ($data1 as $item)
                <div class="col col-sm-3">
                    <div class="card card-item mt-3" style="height: 250px">
                        <img src="{{asset('image/gallery/'.$item->gambar)}}" class="b img" style="height: 180px; width:100%" alt="{{$item->caption}}" />
                        <p>{{$item->caption}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-4">
                <div class="col col-sm text-center">
                    {{ $data1->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section">
    <div class="container">
        <div class="owl-carousel text-center">
            @foreach ($data2 as $item)
            <div class="item card" style="height: 250px">
                <img class="img" src="{{asset('image/gallery/'.$item->gambar)}}" style="height: 180px;" alt="{{$item->caption}}" />
                <p>{{$item->caption}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- modal 4 --}}

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="gambarModal">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

  <script>
      // Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
     $(function () {
         $('.img').click(function (e) { 
                e.preventDefault();
                $('#myModal').css("display", "block");
                var src = $(this).attr('src');
                var alt = $(this).attr('alt');
                $('#gambarModal').attr('src',src);
                $('#caption').html(alt);
                $('#myModal').click(function (e) { 
                    e.preventDefault();
                    $('#myModal').css("display", "none");
                });
         });
        $(".owl-carousel").owlCarousel({
            autoplay:true,
            items : 2,
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
