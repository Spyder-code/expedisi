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
   <a class="nav-link" href="{{url('admin/pesan')}}">
     <i class="fas fa-envelope"></i>
     <span>Pesan</span></a>
 </li>
@endsection

@section('content')
    <div class="container">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Expedisi</h1>
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
                                <th scope="col-sm">Id</th>
                                <th scope="col-sm">Nama expedisi</th>
                                <th scope="col-sm">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($expedisi as $ex)
                               <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <th scope="row">{{ $ex->id }}</th>
                                  <td>{{ $ex->nama }}</td>
                                  <td><a class="btn btn-primary btn-sm text-light" data-toggle="modal" data-target="#ub-{{$ex->id}}">Ubah</a>
                                    <form action="{{url('HapusExpedisi')}}" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="{{$ex->id}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah kamu yakin menghapus layanan ini?')">Hapus</button>
                                    </form>
                                   </td>

                                    <div class="modal fade" id="ub-{{$ex->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Expedisi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('UpdateExpedisi')}}" method="post">
                                                    <input type="hidden" name="id" value="{{$ex->id}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Nama Expedisi</label>
                                                        <input type="text" name="nama" class="form-control" value="{{$ex->nama}}">
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
                        <h4 class="text-center mt-3">Tambah Expedisi</h4>
                        <hr>
                        <form action="{{url('admin/expedisi')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Expedisi</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success mt-3">Tambah Expedisi</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection
