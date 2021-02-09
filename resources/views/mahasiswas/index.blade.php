@extends('layout.main')

@section('title', 'Daftar Siswa')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Daftar Siswa</h1>
                    <a href="{{url('/mahasiswas/create')}}" class="btn btn-success my-3">Tambah Data Siswa</a>
                    <table class="table">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach( $mahasiswa as $mahasiswa )
                        <tr>
                        <th scope="row">{{ $loop-> iteration }}</th>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->tgl_lahir }}</td>
                        <td>{{ $mahasiswa->nis }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>{{ $mahasiswa->jurusan }}</td>
                        <td>
                            <a href="mahasiswas/{{ $mahasiswa->id }}/edit" class="badge bg-success">edit</a>
                            <form action="{{ url('/mahasiswas/').$mahasiswa->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <a href="{{url('/mahasiswas')}}" class="badge bg-danger">delete</a>
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