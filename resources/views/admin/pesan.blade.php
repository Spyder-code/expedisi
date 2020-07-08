@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <table class="table">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if (session('status'))
                            <div class='alert alert-success'>
                                {{ session('status') }}
                        @endif
                    @foreach($chat as $cht)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $cht->nama }}</td>
                            <td>{{ $cht->email }}</td>
                            <td>{{ $cht->isi }}</td>
                            <td>
                            <a href="{{ url('/admin/pesan/destroy/'.$cht->id) }}" class="btn btn-sm btn-danger text-white" 
                            onclick="return confirm('apakah kamu yakin menghapus produk {{ $cht->nama }} ini?')">Hapus</a>
                            <!-- <form action="{{ $cht->id }}" method="POST" class="d-inline">
                                    @csrf
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('apakah kamu yakin menghapus layanan ini?')">Hapus</button>
                            </form> -->
                                <button class="btn btn-sm btn-primary">Balas</button>
                            </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
