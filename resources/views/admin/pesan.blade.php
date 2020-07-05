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
                        <tr>
                            <th scope="row">1</th>
                            <td>Almi</td>
                            <td>mayhem@yahoo.com</td>
                            <td>Jcoba isi</td>
                            <td>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                <button class="btn btn-sm btn-primary">Balas</button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
