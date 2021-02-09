@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
                    <form method="POST" action="{{ url('/colleges', $college->id) }}">
                    @method ('patch')
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $college->nama }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="Masukan Tanggal Lahir" name="tgl_lahir" value="{{ $college->tgl_lahir }}">
                            @error('tgl_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nis">NRP</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukan Nis" name="nis"  value="{{ $college->nis }}">
                            @error('nis')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email"  value="{{ $college->email }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-select @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan">
                                    <option selected>{{ $college->jurusan }}</option>
                                    <option value="Perbankan">Perbankan</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Psikologi">Psikologi</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option> 
                            </select>
                                @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-warning mt-3">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
@endsection