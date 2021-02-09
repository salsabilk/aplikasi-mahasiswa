@extends('layout.main')

@section('title', 'Form Tambah Data Mata Kuliah')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Tambah Data Mata Kuliah</h1>
                    <form method="POST" action="{{ url('/lessons') }}">
                    @csrf
                    <div class="form-group">
                            <label for="nama_mk">Nama Mata Kuliah</label>
                                <select class="form-select @error('nama_mk') is-invalid @enderror" id="nama_mk" name="nama_mk">
                                    <option selected>Pilih Mata Kuliah</option>
                                    <option value="Fisika Dasar">Fisika Dasar</option>
                                    <option value="Kalkulus I dan Kalkulus II">Kalkulus I dan Kalkulus II</option>
                                    <option value="Logika Matematika">Logika Matematika</option>
                                    <option value="Matematika Diskrit">Matematika Diskrit</option>
                                    <option value="Aljaber Linier dan Matrix">Aljaber Linier dan Matrix</option>
                                    <option value="Metode Numerik">Metode Numerik</option>
                                    <option value="Statistik">Statistik</option>
                                    <option value="Struktur Data">Struktur Data</option>
                                </select>
                                @error('nama_mk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="number" class="form-control @error('sks') is-invalid @enderror" id="sks" placeholder="Masukan sks" name="sks" value="{{ old('sks') }}">
                            @error('sks')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="number" class="form-control @error('semester') is-invalid @enderror" id="semester" placeholder="Masukan semester" name="semester"  value="{{ old('semester') }}">
                            @error('semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
@endsection