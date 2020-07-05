@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-sm-8">
                <div class="card">
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama expedisi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Dari</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Expedisi jawa - bali</td>
                              <td>12000</td>
                              <td>Jawa</td>
                              <td>Bali</td>
                              <td><button class="btn btn-sm btn-primary">Lihat detail</button></td>
                            </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="col col-sm-4 border-left">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center mt-3">Tambah Expedisi</h4>
                        <hr>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Expedisi</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Harga /kg</label>
                                <input type="number" name="harga" id="harga" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="deskripsi">Dari</label>
                                        <input type="text" name="dari" id="dari" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="deskripsi">Tujuan</label>
                                        <input type="text" name="tujuan" id="tujuan" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mt-3">Tambah Expedisi</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
