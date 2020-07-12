@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Detail Laporan</h5>
                  @foreach ($data_laporan as $dl)
                  <p class="card-text">Nama Pengirim : {{$dl->pengirim}}</p>
                  <p class="card-text">Alamat Pengirim : {{$dl->alamat_pengirim}}</p>
                  <p class="card-text">Nama Penerima : {{$dl->penerima}}</p>
                  <p class="card-text">Alamat Penerima : {{$dl->alamat_penerima}}</p>
                  <p class="card-text">Nama Barang : {{$dl->barang}}</p>
                  <p class="card-text">Berat : {{$dl->berat}}</p>
                  <p class="card-text">Pengiriman Dari : {{$dl->dari}}</p>
                  <p class="card-text">Tujuan Pengiriman : {{$dl->tujuan}}</p>
                  <p class="card-text">Harga : {{$dl->harga}}</p>
                  <p class="card-text">Kode : {{$dl->kode}}</p>
                  <p class="card-text">Status : {{$dl->status}}</p>
                  <p class="card-text">Tanggal : {{$dl->created_at}}</p>
                  @endforeach
                  <a href="{{url('/admin/laporanTransaksi')}}" class="btn btn-primary">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
