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
    <a class="nav-link" href="{{url('admin/gallery')}}">
      <i class="fas fa-camera"></i>
      <span>Gallery</span></a>
 </li>

 <li class="nav-item active">
   <a class="nav-link" href="{{url('admin/pesan')}}">
     <i class="fas fa-envelope"></i>
     <span>Pesan</span></a>
 </li>
@endsection

@section('content')
    <div class="container">

         <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Pesan</h1>
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
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table class="table">
                                <thead class="table-dark">
                                <tr>
                                    <th scope="col-sm">No</th>
                                    <th scope="col-sm">Nama</th>
                                    <th scope="col-sm">Email</th>
                                    <th scope="col-sm">Isi</th>
                                    <th scope="col-sm">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($chat as $cht)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $cht->nama }}</td>
                                    <td>{{ $cht->email }}</td>
                                    <td>{{ $cht->isi }}</td>
                                    <td>
                                    {{-- <a href="{{ url('HapusPesan'.$cht->id) }}" class="btn btn-sm btn-danger text-white"
                                    onclick="return confirm('apakah kamu yakin menghapus pesan {{ $cht->nama }} ini?')">Hapus</a> --}}
                                    <form action="{{url('HapusPesan')}}" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="{{$cht->id}}">
                                            @csrf
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('apakah kamu yakin menghapus layanan ini?')">Hapus</button>
                                    </form>
                                        {{-- <button class="btn btn-sm btn-primary">Balas</button> --}}
                                    </td>
                                    </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
