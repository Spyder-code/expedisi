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

 <li class="nav-item active">
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
    <a class="nav-link" href="{{url('admin/gallery')}}">
      <i class="fas fa-camera"></i>
      <span>Gallery</span></a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="{{url('admin/pesan')}}">
     <i class="fas fa-envelope"></i>
     <span>Pesan</span></a>
 </li>
@endsection

@section('content')
    <div class="container">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
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
            <div class="row mb-5">
                <div class="col-sm col-sm-8">
                    <div class="card shadow-sm">
                        <div class="table-responsive-md">
                        <table class="table">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col-sm">No</th>
                                <th scope="col-sm">Gambar</th>
                                <th scope="col-sm">Caption</th>
                                <th scope="col-sm">Tanggal</th>
                                <th scope="col-sm">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($gallery as $gal)
                               <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  {{-- <th scope="row">{{ $gal->gambar }}</th> --}}
                                  <th><img width="100" height="100" src="{{ url('/image/gallery/'.$gal->gambar) }}"></th>
                                  <td>{{ $gal->caption }}</td>
                                  <td>{{ $gal->created_at = date("d-M-Y") }}</td>
                                  <td><a class="btn btn-primary btn-sm text-light" data-toggle="modal" data-target="#ub-{{$gal->id}}">Ubah</a>
                                    <form action="{{url('/HapusGallery')}}" method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="{{$gal->id}}">
                                    <input type="hidden" name="Image" value="{{$gal->gambar}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin akan menghapusnya?')">Hapus</button>
                                    </form>
                                   </td>

                                    <div class="modal fade" id="ub-{{$gal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Expedisi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('/UpdateGallery')}}" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="{{$gal->id}}">
                                                    <input type="hidden" name="oldImage" value="{{$gal->gambar}}">
                                                    @csrf
                                                    <div class="form-group">
                                                            <label for="inputGambar" class="mb-4">Masukan Gambar Gallery</label>
                                                            <input type="file" name="gambar" value="{{$gal->gambar}}" id="inputGambar" onchange="loadFile(event)" required>
                                                            <img id="review" class="img-thumbnail mt-3" class="img-responsive"/>
                                                            <script>
                                                            var loadFile = function(event) {
                                                                var output = document.getElementById('review');
                                                                output.src = URL.createObjectURL(event.target.files[0]);
                                                                output.onload = function() {
                                                                URL.revokeObjectURL(output.src)
                                                                }
                                                            };
                                                            </script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Caption</label>
                                                        <input type="text" name="caption" class="form-control" value="{{$gal->caption}}">
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>

            <div class="col-sm col-sm-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center mt-3">Tambah Gallery</h4>
                        <hr>
                        <form action="{{url('/TambahGallery')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputImage" class="mb-4">Masukan Gambar</label>
                                <input type="file" name="gambar" id="inputImage" onchange="File(event)" required>
                                <img id="output" class="img-thumbnail mt-3" />
                                <script>
                                var File = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                    output.onload = function() {
                                    URL.revokeObjectURL(output.src)
                                    }
                                };
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="caption">Caption</label>
                                <input type="text" name="caption" id="caption" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success mt-3">Tambah Gallery</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection
