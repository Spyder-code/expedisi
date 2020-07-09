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
                    @foreach($chat as $cht)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $cht->nama }}</td>
                            <td>{{ $cht->email }}</td>
                            <td>{{ $cht->isi }}</td>
                            <td>
                            {{-- <a href="{{ url('HapusPesan'.$cht->id) }}" class="btn btn-sm btn-danger text-white"
                            onclick="return confirm('apakah kamu yakin menghapus pesan {{ $cht->nama }} ini?')">Hapus</a> --}}
                            <form action="{{url('HapusPesan')}}" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="{{$cht->id}}">
                                    @csrf
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('apakah kamu yakin menghapus layanan ini?')">Hapus</button>
                            </form>
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
