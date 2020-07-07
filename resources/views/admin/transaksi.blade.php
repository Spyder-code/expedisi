@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <form action="" class="form mt-5 mb-5 mr-5 ml-5" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col col-2">Nama Expedisi</div>
                                <div class="col">
                                    
                                    <select name="expedisi" class="form-control" id="expedisi">
                                    @foreach($expedisi as $ex)
                                        <option value="{{ $ex->nama }}">{{ $ex->nama }}</option>
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
                                    <input type="text" name="tujuan" id="tujuan" class="form-control">
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
                        <button type="submit" class="btn btn-success">Tambah transaksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
