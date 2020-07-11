@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
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
                                <button class="btn btn-sm btn-secondary">Detail</button>
                                <button class="btn btn-sm btn-warning">Ubah</button>
                                <button class="btn btn-sm btn-primary">Ganti Status</button>
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
@endsection
