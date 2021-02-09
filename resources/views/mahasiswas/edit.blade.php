@extends('layout.main')

@section('title', 'Form Ubah Data Siswa')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Ubah Data Siswa</h1>
                    <form method="POST" action="{{ url('/mahasiswas', $mahasiswa->id) }}">
                    @method ('patch')
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $mahasiswa->nama }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="Masukan Tanggal Lahir" name="tgl_lahir" value="{{ $mahasiswa->tgl_lahir }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukan Nis" name="nis"  value="{{ $mahasiswa->nis }}">
                            @error('nis')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email"  value="{{ $mahasiswa->email }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan"  value="{{ $mahasiswa->jurusan }}">
                            @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
@endsection