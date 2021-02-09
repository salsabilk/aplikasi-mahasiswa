@extends('layout.main')

@section('title', 'Daftar KRS')

@section('container')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/background.css') }}">
 
	<div class="container">
        <div class="row">
			<div class="card-body">
                 <h1 class="mt-3">Daftar KRS</h1>
                 <form method="POST" action="{{ url('/krs')}}">
                 @csrf
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                                <select class="form-select" name="colleges_id">
                                 @foreach($college as $clg)
                                  <option value="{{$clg->id}}">{{$clg->nama}}</option>
                                 @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="">Mata Kuliah</label>
                                <select class="form-select" name="lessons_id">
                                  @foreach($lesson as $lsn)
                                   <option value="{{$lsn->id}}">{{$lsn->nama_mk}}</option>
                                  @endforeach
                                </select>
                        </div>
                  <button type="submit" class="btn btn-primary mt-2">Tambah Data KRS</button>
                </form>
			</div>
		</div>
	</div>
@endsection