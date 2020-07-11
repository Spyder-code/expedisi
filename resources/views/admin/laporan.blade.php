@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    @endif
                    <table class="table text-center">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Alamat Penerima</th>
                            <th scope="col">Status</th>
                            <th scope="col">Kode Pengiriman</th>
                            <th scope="col">Aksi</th>
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
                                <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ub-{{$item->id}}">Ubah</button>
                                <button class="btn btn-sm btn-primary">Ganti Status</button>
                            </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
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
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control" value="{{$item->status}}">
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
