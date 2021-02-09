@extends('layout.main')

@section('title', 'Daftar KRS')

@section('container')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/background.css') }}">
 
	<div class="container">
        <div class="row">
			<div class="card-body">
                 <h1 class="mt-3">Daftar KRS</h1>
				 <a href="{{url('/krs/create')}}" class="btn btn-primary my-3">Tambah Data KRS</a>
				 <table class="table">
                        <thead class="table-dark">
						<tr>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Mata Kuliah</th>
						</tr>
					</thead>
					<tbody>
						@foreach($college as $clg)
						<tr>
						<td>
							<ul>
							<li>{{ $clg->nama }}</li>
							</ul>
						</td>
						<td>
							<ul>
							@foreach($lesson as $lsn)
							<li>{{$lsn->nama_mk}}</li>
							@endforeach
							</ul>
                        </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection