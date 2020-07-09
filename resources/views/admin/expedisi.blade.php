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
                <div class="col col-sm-8">
                    <div class="card">
                        <table class="table">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id</th>
                                <th scope="col">Nama expedisi</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($expedisi as $ex)
                               <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <th scope="row">{{ $ex->id }}</th>
                                  <td>{{ $ex->nama }}</td>
                                  <td><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ub-{{$ex->id}}">Ubah</a>
                                    <form action="{{url('HapusExpedisi')}}" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="{{$ex->id}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah kamu yakin menghapus layanan ini?')">Hapus</button>
                                    </form>
                                   </td>

                                    <div class="modal fade" id="ub-{{$ex->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Expedisi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('UpdateExpedisi')}}" method="post">
                                                    <input type="hidden" name="id" value="{{$ex->id}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Nama Expedisi</label>
                                                        <input type="text" name="nama" class="form-control" value="{{$ex->nama}}">
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                    <div class="card">
                        <table class="table">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id expedisi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Dari</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($area as $ar)
                               <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <td>{{ $ar->id_expedisi }}</td>
                                  <td>{{ $ar->harga }}</td>
                                  <td>{{ $ar->dari }}</td>
                                  <td>{{ $ar->tujuan }}</td>
                                  <td><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ch-{{$ar->id}}">Ubah</a>
                                    <form action="{{url('HapusArea')}}" method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="{{$ar->id}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah kamu yakin menghapus layanan ini?')">Hapus</button>
                                    </form>
                                   </td>

                                    <div class="modal fade" id="ch-{{$ar->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Area</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('UpdateArea')}}" method="post">
                                                    <input type="hidden" name="id" value="{{$ar->id}}">
                                                    @csrf
                                                    <div class="form-group">
                                                    <select class="form-control" name="id_expedisi" id="id_expedisi">
                                                    <option selected="selected" value="{{$ar->id_expedisi}}"></option>
                                                        @foreach ($expedisi as $ex)
                                                        <option value="{{$ex->id}}">{{$ex->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Harga</label>
                                                        <input type="text" name="harga" class="form-control" value="{{$ar->harga}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Dari</label>
                                                        <input type="text" name="dari" class="form-control" value="{{$ar->dari}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Tujuan</label>
                                                        <input type="text" name="tujuan" class="form-control" value="{{$ar->tujuan}}">
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>

            <div class="col col-sm-4 border-left">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center mt-3">Tambah Expedisi</h4>
                        <hr>
                        <form action="{{url('admin/expedisi')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Expedisi</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success mt-3">Tambah Expedisi</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center mt-3">Tambah Area</h4>
                        <hr>
                        <form action="{{url('admin/area')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="expedisi">Nama Expedisi</label>
                                    <select name="expedisi" class="form-control" id="expedisi">
                                        <option selected="selected" disabled="disabled"></option>
                                        @foreach($expedisi as $ex)
                                        <option data-harga="{{$ex->harga}}" value="{{ $ex->id }}">{{ $ex->nama }}</option>
                                        @endforeach
                                    </select>
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

            {{-- <div class="modal fade" id="ub-{{$ex->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Alamat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('updateLayanan')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{$lyn->id}}">
                            <input type="hidden" name="oldImage" value="{{$lyn->image}}">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama layanan</label>
                                <input type="text" name="nama" class="form-control" value="{{$lyn->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="{{$lyn->deskripsi}}">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
                </div>
            </div> --}}
    </div>
@endsection
