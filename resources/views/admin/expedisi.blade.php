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
                                  <td><a class="btn btn-primary btn-sm text-light" data-toggle="modal" data-target="#ub-{{$ex->id}}">Ubah</a>
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
            </div>
    </div>
@endsection
