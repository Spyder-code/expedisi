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
 <li class="nav-item active">
   <a class="nav-link" href="{{url('admin/perusahaan')}}">
     <i class="fas fa-briefcase"></i>
     <span>Perusahaan</span></a>
 </li>

 <!-- Nav Item - Charts -->
 <li class="nav-item">
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

          <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Perusahaan</h1>
         </div>

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
<div class="row">
    <div class="col-sm">
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
         {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif(session('warning'))
      <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
         {{ session('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @error('nama')
      <div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
         {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @enderror
      @error('alamat')
      <div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
         {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @enderror
      @error('image')
      <div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
         {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @enderror
        <div class="card mb-5 shadow-sm">
            <div class="row mt-5 mb-5 mr-3 ml-3">
                <div class="col-sm col-sm-4">
                    <h4 class="card-title">Icon perusahaan</h4>
                    <img src="{{asset('image/perusahaan/'.$perusahaan->logo)}}" class="img-thumbnail" class="img-responsive" alt="">
                     <div class="mt-2">
                        <button data-toggle="modal" data-target="#modalIcon" class="btn btn-sm btn-primary mt-2">Edit Icon <span class="mdi mdi-camera"></span></button>
                     </div>
                </div>
                <div class="col-sm mt-4">
                    <ul class="list-group text-left">
                        <li class="list-group-item">
                           <div class="row">
                              <div class="col-sm-2">
                                  <label class="font-weight-bold">Nama Perusahaan:</label>
                              </div>
                              <div class="col-sm-8">
                                  <label class="float-right"> {{ $perusahaan->nama }}</label>
                               </div>
                               <div class="col-sm-2">
                                  <button data-toggle="modal" data-target="#modalNama" class="btn btn-sm btn-primary float-right">Edit</button>
                              </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label class="font-weight-bold">Alamat:</label>
                                </div>
                                <div class="col-sm-8">
                                    <label class="float-right"> {{ $perusahaan->alamat }}</label>
                                 </div>
                                 <div class="col-sm-2">
                                    <button data-toggle="modal" data-target="#modalAlamat" class="btn btn-sm btn-primary float-right">Edit</button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                           <div class="row">
                              <div class="col-sm-2">
                                  <label class="font-weight-bold">No. Telp:</label>
                              </div>
                              <div class="col-sm-8">
                                  <label class="float-right"> {{ $perusahaan->nomor }}</label>
                               </div>
                               <div class="col-sm-2">
                                  <button data-toggle="modal" data-target="#modalNomor" class="btn btn-sm btn-primary float-right">Edit</button>
                              </div>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

      <!-- modal nama -->
      <div class="modal fade" id="modalNama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Nama</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="{{url('GantiNama')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="">Masukan Nama Perusahaan Baru</label>
                     <input type="text" name="nama" class="form-control" autocomplete="off" required>
                    <input type="hidden" name="id" value="{{$perusahaan->id}}">
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
               </form>
            </div>
         </div>
         </div>
      </div>

      <!-- modal alamat -->
      <div class="modal fade" id="modalAlamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Alamat</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="{{url('GantiAlamat')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="">Masukan Alamat Perusahaan Baru</label>
                     <textarea name="alamat" class="form-control" cols="30" rows="10" required></textarea>
                  </div>
                  <input type="hidden" name="id" value="{{$perusahaan->id}}">
                  <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
               </form>
            </div>
         </div>
         </div>
      </div>

      <!-- modal nomor -->
      <div class="modal fade" id="modalNomor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Nomor</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="{{url('GantiNomor')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="">Masukan Nomor Perusahaan Baru</label>
                     <input type="number" name="nomor" class="form-control" required>
                     <input type="hidden" name="id" value="{{$perusahaan->id}}">
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
               </form>
            </div>
         </div>
         </div>
      </div>

      <!-- modal icon -->
      <div class="modal fade" id="modalIcon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Icon</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="{{url('GantiIcon')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="oldImage" value="{{$perusahaan->logo}}">
                  @csrf
                  <div class="form-group">
                     <label for="iconInput" class="mb-4">Masukan Icon Perusahaan Baru</label>
                     <input type="file" name="image" id="iconInput" onchange="loadFile(event)" required>
                     <input type="hidden" name="id" value="{{$perusahaan->id}}">
                     <img id="output" class="img-thumbnail mt-3" class="img-responsive" />
                     <script>
                     var loadFile = function(event) {
                           var output = document.getElementById('output');
                           output.src = URL.createObjectURL(event.target.files[0]);
                           output.onload = function() {
                           URL.revokeObjectURL(output.src)
                           }
                     };
                     </script>
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
               </form>
            </div>
         </div>
         </div>
      </div>

@endsection
