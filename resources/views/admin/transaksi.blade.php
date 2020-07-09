@extends('layouts.admin')
@section('content')
    <div class="container">
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
            <div class="col">
                <div class="card">
                <form action="{{url('InputTransaksi')}}" method="post" class="form mt-5 mb-5 mr-5 ml-5" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col col-2">Nama Expedisi</div>
                                <div class="col">
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
                                <div class="col col-2">Nama Customer</div>
                                <div class="col">
                                    <input type="text" name="customer" id="customer" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="dari">Nama barang</label>
                                    <input type="text" name="barang" id="barang" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="dari">Berat /kg</label>
                                    <input type="number" name="berat" id="berat" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="dari">Dari</label>
                                    <input type="text" name="dari" id="dari" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="dari">Tujuan</label>
                                    <select name="tujuan" class="form-control" id="tujuan">
                                        <option selected="selected" disabled="disabled"></option>
                                        {{-- @foreach($area as $ar) --}}
                                        <option value="">Select</option>
                                        {{-- data-harga="{{$ar->harga}}" value="{{ $ar->id }}" --}}
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col col-2">Harga</div>
                                <div class="col">
                                    <input type="text" name="harga" id="harga" class="form-control" readonly="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah transaksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $('#expedisi').change(function () {
                var a = $area.find(':selected');
                $('#tujuan').val(a);
            });

        });
    </script>
    {{-- <script>
        $(function(){
            $('#expedisi').change(function () {
                var a = $(this).find(':selected').attr('data-harga')

                $('#berat').keyup(function (e) {
                var b = $(this).val();
                    $('#harga').val(a*b);

                });

            });

        });
    </script> --}}
@endsection
