@extends('layout.main')

@section('title', 'Daftar Mata Kuliah')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Daftar Mata Kuliah</h1>
                    <a href="{{url('/lessons/create')}}" class="btn btn-primary my-3">Tambah Data Mata Kuliah</a>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead class="table-warning">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">SKS</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach( $lessons as $lesson )
                        <tr>
                        <th scope="row">{{ $loop-> iteration }}</th>
                        <td>{{ $lesson->nama_mk }}</td>
                        <td>{{ $lesson->sks }}</td>
                        <td>{{ $lesson->semester }}</td>
                        <td>
                        <a href="lessons/{{ $lesson->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ url('/lessons/'.$lesson->id) }}" method="POST" class="d-inline">
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