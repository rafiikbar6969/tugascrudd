@extends('layout.main')

@section('title', 'Daftar Ujian')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3">
            <h1>Daftar Ujian</h1>
            <a href="/ujian/create" class="btn btn-primary my-3">Tambah Data Ujian</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Dosen</th>
                        <th scope="col">Jumlah Soal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ujian as $ujn)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$ujn->nama_mk}}</td>
                        <td>{{$ujn->dosen}}</td>
                        <td>{{$ujn->jml_Soal}}</td>
                        <td>{{$ujn->keterangan}}</td>

                        <td><a href="/ujian/{{$ujn->id}}/edit" class="btn bg-primary">Edit</a>

                            <form action="/ujian/{{ $ujn->id }}" method="POST" class="d-inline">
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