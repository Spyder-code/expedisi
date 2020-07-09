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
                <div class="row">
                    @foreach($layanan as $lyn)
                    <div class="col col-4">
                        <div class="card">
                            <div class="card-header bg-info text-light">{{ $lyn->nama }}</div>
                            <div class="card-body">
                                <img src="{{asset('image/'.$lyn->image)}}" alt="" class="img-thumbnail">
                                <p>{{ $lyn->deskripsi }}</p>
                                <div class="card-footer d-inline" class="d-inline">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ub-{{$lyn->id}}">Ubah</a>
                                    <form action="{{url('HapusLayanan')}}" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="{{$lyn->id}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah kamu yakin menghapus layanan ini?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                     {{-- modal layanan --}}
    <div class="modal fade" id="ub-{{$lyn->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('updateLayanan')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$lyn->id}}">
                    <input type="hidden" name="oldImage" value="{{asset('image/'.$lyn->image)}}">
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
    </div>


                    @endforeach
                </div>
            </div>
            <div class="col col-sm-4 border-left">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center mt-3">Tambah layanan</h4>
                        <hr>
                        <form action="{{url('admin/layanan')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama layanan</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5"></textarea>
                            </div>
                            <div class="text-center">
                                <label for="image">Image</label>
                            <input type="file" name="image" id="iconInput" onchange="loadFile(event)" required>
                            <img id="output" class="img-thumbnail mt-3" />
                            <script>
                            var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                                output.onload = function() {
                                URL.revokeObjectURL(output.src)
                                }
                            };
                            </script>
                            <button type="submit" class="btn btn-success text-center mt-3">Tambah layanan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
