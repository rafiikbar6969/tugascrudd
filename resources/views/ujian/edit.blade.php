@extends('layout.main')

@section('title', 'Form Ubah data Ujian')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8 mt-3">
            <h1>Form Ubah data Ujian</h1>

            <form method="POST" action="/ujian/{{$ujian->id}}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nama_mk">Nama Mata Kuliah</label>
                    <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama_mk" placeholder="Masukkan Nama Mata Kuliah" name="nama_mk" value="{{$ujian->nama_mk}}">
                    @error('nama_mk') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="dosen">Dosen</label>
                    <input type="text" class="form-control @error('dosen') is-invalid @enderror" id="dosen" placeholder="Masukkan Nama Dosen" name="dosen" value="{{$ujian->dosen}}">
                    @error('dosen') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="jml_Soal">Jumlah Soal</label>
                    <input type="text" class="form-control @error('jml_Soal') is-invalid @enderror" id="jml_Soal" placeholder="Masukkan Jumlah Soal" name="jml_Soal" value="{{$ujian->jml_Soal}}">
                    @error('jml_Soal') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" value="{{$ujian->keterangan}}">
                    @error('keterangan') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data</button>

            </form>


        </div>
    </div>
</div>
@endsection