@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-sm-8">
                <div class="row">
                    @foreach($layanan as $lyn)
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-info text-light">{{ $lyn->nama }}</div>
                            <div class="card-body">
                                <img src="{{asset('image/'.$lyn->image)}}" alt="" class="img-thumbnail">
                                <p>{{ $lyn->deskripsi }}</p>
                                <div class="card-footer d-inline">
                                    <button class="btn btn-primary btn-sm">Ubah</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
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
                        <form action="{{url('admin/layanan')}}" method="POST">
                            @csrf
                            @if (session('status'))
                            <div class='alert alert-success'>
                                {{ session('status') }}
                            </div>
                            @endif
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

    {{-- modal layanan --}}
    <div class="modal fade" id="modalLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Alamat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama layanan</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
