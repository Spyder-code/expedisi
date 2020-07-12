@extends('layouts.admin')

@section('sidebar')
<!-- Nav Item - Dashboard -->
<li class="nav-item">
   <a class="nav-link" href="{{url('home')}}">
     <i class="fas fa-list-ul"></i>
     <span>Main Dashboard</span></a>
   </li>
   <hr class="sidebar-divider my-0">

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
   <a class="nav-link" href="{{url('admin/perusahaan')}}">
     <i class="fas fa-briefcase"></i>
     <span>Perusahaan</span></a>
 </li>

 <!-- Nav Item - Charts -->
 <li class="nav-item active">
   <a class="nav-link" href="{{url('admin/owner')}}">
     <i class="fas fa-user"></i>
     <span>Owner</span></a>
 </li>

 <!-- Nav Item - Tables -->
 <li class="nav-item">
   <a class="nav-link" href="{{url('admin/transaksi')}}">
     <i class="fas fa-cash-register"></i>
     <span>Transaksi</span></a>
 </li>

 <!-- Nav Item - Tables -->
 <li class="nav-item">
   <a class="nav-link" href="{{url('admin/laporanTransaksi')}}">
     <i class="fas fa-chart-line"></i>
     <span>Laporan Transaksi</span></a>
 </li>

 <li class="nav-item">
   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
     <i class="fas fa-ship"></i>
     <span>Expedisi</span>
   </a>
   <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
     <div class="bg-white py-2 collapse-inner rounded">
       <a class="collapse-item" href="{{url('admin/expedisi')}}">Tambah Expedisi</a>
       <a class="collapse-item" href="{{url('admin/area')}}">Area Ekspedisi</a>
     </div>
   </div>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="{{url('admin/pesan')}}">
     <i class="fas fa-envelope"></i>
     <span>Pesan</span></a>
 </li>
@endsection

@section('content')
<div class="container">
   @if (session('status'))
   <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('status') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   @endif
   @if (session('gagal'))
   <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
      {{ session('gagal') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   @endif
   @error('alamat')
   <div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
      {{ $message }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   @enderror
   @error('nomor')
   <div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
      {{ $message }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   @enderror
   @error('pass2')
   <div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
      {{ $message }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   @enderror
   <div class="row">
      <div class="col-sm text-center">
         <div class="card mt-3 ">
            <img class="img-thumbnail mx-auto mt-3" class="img-responsive" src="{{asset('image/owner/'.$owner->image)}}" style="height:260px" >
            <div class="card-body">
                <h5 class="card-title">{{ $owner->name }}</h5>
                <ul class="list-group text-left">
                    <li class="list-group-item">
                       <div class="row">
                          <div class="col-sm-3">
                             <label for="address">Phone:</label>
                          </div>
                          <div class="col-sm-9">
                             {{ $owner->no_telp }}
                             <a href="#" data-toggle="modal" data-target="#modalNomor" class="badge badge-primary">Edit</a>
                          </div>
                       </div>
                    </li>
                </ul>
            </div>
         </div>

      </div>
       <div class="col-sm mt-3">
        <h4 class="font-weight-bold">Ganti Username</h4>
        <hr>
        <form  method="post" action="{{ url('/GantiUsernameOwner') }}" enctype="multipart/form-data">
            @csrf
           <div class="form-group">
               <input type="text" name="username" class="form-control" required>
               <input type="hidden" name="id" value="{{$owner->id}}" class="form-control" required>
           </div>
           <button type="submit" class="btn btn-success mb-2 float-right mr-5">Ubah</button>
        </form>
           <h4 class="font-weight-bold">Foto Profil</h4>
           <hr>
           <form  method="post" action="{{ url('/GantiIconOwner') }}" enctype="multipart/form-data">
               @csrf
              <div class="form-group">
                  <label for="inputGambar" class="mb-4">Masukan gambar baru</label>
                  <input type="file" name="image" id="inputGambar" required>
                  <input type="hidden" name="oldImage" value="{{$owner->image}}">
                  <input type="hidden" name="id" value="{{$owner->id}}" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-success mb-2 float-right mr-5">Ubah</button>
           </form>
           <h4 class="font-weight-bold mt-5">Ganti Password</h4>
           <hr>
           <form class="form-row" method="post" action="{{ url('/GantiPasswordOwner') }}">
                 @csrf
                 <div class="col-sm">
                    <div class="form-group">
                       <label for="pass1">Old Password</label>
                       <input type="password" class="form-control" name="pass1" required>
                    <input type="hidden" class="form-control" name="id" value="{{$owner->id}}">
                    </div>
                 </div>
                 <div class="col-sm">
                    <div class="form-group">
                       <label for="pass2">New Password</label>
                       <input type="password" class="form-control" name="pass2" required>
                    </div>
                    <button type="submit" class="btn btn-success mb-2 float-right mr-5">Ubah</button>
                 </div>
           </form>
           <hr>
       </div>

        <!-- Modal nomor-->
        <div class="modal fade" id="modalNomor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Nomor Hp</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              <div class="modal-body">
                 <form action="{{ url('/GantiNomorOwner') }}" method="post">
                    @csrf
                    <div class="form-group">
                       <label for="inputNomor">Masukan nomor hp owner baru</label>
                       <input type="number" id="inputNomor" name="nomor" class="form-control">
                       <input type="hidden" id="id" name="id" value="{{$owner->id}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                 </form>
              </div>
          </div>
          </div>
        </div>

   </div>
</div>
@endsection
