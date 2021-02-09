@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
                    <form method="POST" action="{{ url('/colleges') }}">
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group" data-provide="datepicker">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="Masukan Tanggal Lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                            @error('tgl_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nis">NRP</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukan NRP" name="nis"  value="{{ old('nis') }}">
                            @error('nis')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email"  value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select @error('jurusan') is-invalid @enderror"  id="jurusan" name="jurusan">
                            <option selected>Piih Jurusan</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Kimia">Teknik Kimia</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                            @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </select>
                        <div>
                        <button type="submit" class="btn btn-primary mt-2">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
@endsection