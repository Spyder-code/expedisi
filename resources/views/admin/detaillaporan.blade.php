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
                  <p class="card-text">Harga : Rp. {{ $dl->harga}}</p>
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
<script>
    function number_format (number, decimals, decPoint, thousandsSep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
    var n = !isFinite(+number) ? 0 : +number
    var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
    var sep = (typeof thousandsSep === 'undefined') ? '.' : thousandsSep
    var dec = (typeof decPoint === 'undefined') ? ',' : decPoint
    var s = ''

    var toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec)
    return '' + (Math.round(n * k) / k)
        .toFixed(prec)
    }

    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
    if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
    }
    if ((s[1] || '').length < prec) {
    s[1] = s[1] || ''
    s[1] += new Array(prec - s[1].length + 1).join('0')
    }

    return s.join(dec)
    }
</script>

@endsection
