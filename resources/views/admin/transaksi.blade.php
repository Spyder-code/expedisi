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
                        <input type="hidden" name="idExpedisi" id="idExpedisi">
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
                                <div class="col">
                                    <label for="Pengirim">Nama Pengirim</label>
                                    <input type="text" name="pengirim" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="Pengirim">Alamat Pengirim</label>
                                    <input type="text" name="alamatPengirim" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="Penerima">Nama Penerima</label>
                                    <input type="text" name="penerima" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="Penerima">Alamat Penerima</label>
                                    <input type="text" name="alamatPenerima" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col col-6">
                                    <label for="dari">Nama barang</label>
                                    <input type="text" name="barang" id="barang" class="form-control">
                                </div>
                                <div class="col col-3">
                                    <label for="dari">Berat</label>
                                    <input type="number" name="berat" id="berat" value="1" class="form-control">
                                </div>
                                <div class="col col-3">
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
                                <div class="col">
                                    <label for="dari">Dari</label>
                                    <input type="text" name="dari" value="Surabaya" id="dari" class="form-control">
                                </div>
                                <div class="col">
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
                    $("#satuan").append(new Option("","" ));
                    $.each(data, function(index, value) {
                        $("#satuan").append(new Option(value.berat, value.harga ));
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
