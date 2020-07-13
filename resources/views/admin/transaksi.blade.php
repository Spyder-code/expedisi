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
 <li class="nav-item active">
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

         <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
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
            <div class="col-sm">
                <div class="card shadow-sm">
                <form action="{{url('InputTransaksi')}}" method="post" class="form mt-5 mb-5 mr-5 ml-5" method="post">
                        @csrf
                        <input type="hidden" name="idExpedisi" id="idExpedisi">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm col-sm-2">Nama Expedisi</div>
                                <div class="col-sm">
                                    <select name="expedisi" class="form-control" id="expedisi">
                                        <option selected="selected" disabled="disabled"></option>
                                        @foreach($expedisi as $ex)
                                        <option value="{{ $ex->id }}">{{ $ex->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm">
                                    <label for="Pengirim">Nama Pengirim</label>
                                    <input type="text" name="pengirim" class="form-control">
                                </div>
                                <div class="col-sm">
                                    <label for="Pengirim">Alamat Pengirim</label>
                                    <input type="text" name="alamatPengirim" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm">
                                    <label for="Penerima">Nama Penerima</label>
                                    <input type="text" name="penerima" class="form-control">
                                </div>
                                <div class="col-sm">
                                    <label for="Penerima">Alamat Penerima</label>
                                    <input type="text" name="alamatPenerima" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm col-sm-6">
                                    <label for="dari">Nama barang</label>
                                    <input type="text" name="barang" id="barang" class="form-control">
                                </div>
                                <div class="col-sm col-sm-3">
                                    <label for="dari">Berat</label>
                                    <input type="number" name="berat" id="berat" value="1" class="form-control">
                                </div>
                                <div class="col-sm col-sm-3">
                                    <label for="dari">Satuan</label>
                                    <select name="tujuan" class="form-control" id="satuan">
                                        <option selected="selected" disabled="disabled"></option>
                                        {{-- <option value="Kg">Kg</option>
                                        <option value="Koly">Koly</option>
                                        <option value="Ton">Ton</option>
                                        <option value="Kontener">Container</option> --}}
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm">
                                    <label for="dari">Dari</label>
                                    <input type="text" name="dari" value="Surabaya" id="dari" class="form-control">
                                </div>
                                <div class="col-sm">
                                    <label for="dari">Tujuan</label>
                                    <select name="tujuan" class="form-control" id="tujuan">
                                        <option value="Ambon">Ambon</option>
                                        <option value="Papua">Papua</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                               <label for="">Harga</label>
                                <div class="col-md-12">
                                    <input type="text" name="harga" id="harga" class="form-control" readonly="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Tambah transaksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function(){
            $('#expedisi').change(function () {
                var id = $(this).find(":selected").val();
                $('#idExpedisi').val(id);
                $.ajax({
                url:"{{url('getExpedisi')}}",
                type:"POST",
                data:{id:id},
                success:function (data) {
                    $('#satuan').empty();
                    $('#tujuan').empty();
                    $("#satuan").append(new Option("","" ));
                    $("#tujuan").append(new Option("","" ));
                    $.each(data, function(index, value) {
                        $("#satuan").append(new Option(value.berat, value.harga ));
                        $("#tujuan").append(new Option(value.tujuan, value.tujuan ));
                    });
                    $('#satuan').change(function () {
                    var a = $(this).find(":selected").val();
                    var berat = $('#berat').val();
                    $('#harga').val(a*berat);
                    $('#berat').keyup(function () {
                    var b = $(this).val();
                    console.log(b);
                    $('#harga').val(a*b);
                    });

                    });
                }
            })

    });

            });
    </script>

@endsection
