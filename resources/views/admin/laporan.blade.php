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
 <li class="nav-item active">
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
        <h1 class="h3 mb-0 text-gray-800">Laporan Transaksi</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    @endif
                <div class="table-responsive-sm">
                    <table class="table text-center">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col-sm">No</th>
                            <th scope="col-sm">Nama Pengirim</th>
                            <th scope="col-sm">Barang</th>
                            <th scope="col-sm">Alamat Penerima</th>
                            <th scope="col-sm">Status</th>
                            <th scope="col-sm">Kode Pengiriman</th>
                            <th scope="col-sm">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($transaksi as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->pengirim }}</td>
                            <td>{{ $item->barang }}</td>
                            <td>{{ $item->alamat_penerima }}</td>
                            <td>
                                @if ($item->status==0)
                                <span class="text-warning"><i class="fa fa-list" aria-hidden="true"></i> Source </span>
                                @elseif ($item->status==1)
                                <span class="text-primary"><i class="fa fa-truck" aria-hidden="true"></i> Expedition </span>
                                @else
                                <span class="text-success"><i class="fa fa-check" aria-hidden="true"></i> Destination </span>
                                @endif
                            </td>
                            <td>{{$item->kode }}</td>
                            <td>
                                <form action="{{url('/DetailLaporan')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-sm btn-secondary">Detail</button>
                                </form>
                                <button class="btn btn-sm btn-warning mt-2" data-toggle="modal" data-target="#ub-{{$item->id}}">Ubah</button>
                                @if ($item->status!=2)
                                <form action="{{url('/gantiStatus')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-primary mt-2">Ganti Status</button>
                                </form>
                                @endif
                            </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        @foreach($transaksi as $item)
        <div class="modal fade" id="ub-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Layanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('EditLaporan')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$item->id}}">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pengirim</label>
                            <input type="text" name="pengirim" class="form-control" value="{{$item->pengirim}}">
                        </div>
                        <div class="form-group">
                            <label for="">Barang</label>
                            <input type="text" name="barang" class="form-control" value="{{$item->barang}}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Penerima</label>
                            <input type="text" name="alamat_penerima" class="form-control" value="{{$item->alamat_penerima}}">
                        </div>
                        <div class="form-group">
                            <label for="">Kode</label>
                            <input type="text" name="kode" class="form-control" value="{{$item->kode}}">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
