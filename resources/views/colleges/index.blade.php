@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Daftar Mahasiswa</h1>
                    <a href="{{url('/colleges/create')}}" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach( $colleges as $college )
                        <tr>
                        <th scope="row">{{ $loop-> iteration }}</th>
                        <td>{{ $college->nama }}</td>
                        <td>{{ $college->tgl_lahir }}</td>
                        <td>{{ $college->nis }}</td>
                        <td>{{ $college->email }}</td>
                        <td>{{ $college->jurusan }}</td>
                        <td>
                        <a href="colleges/{{ $college->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ url('/colleges/'.$college->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection