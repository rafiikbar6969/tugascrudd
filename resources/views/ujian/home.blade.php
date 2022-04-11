@extends('layout.main')

@section('title', 'Home')

@section('container')
<style type="text/css">
    main {
    }
</style>
<main class="p-md-5">
    <div class="row">
        <div class="col-md-6 p-5 text-black">
            <h1 class="mb-4 font-weight-bold display-4">Biodata Diri</h1>
            <p class="font-italic">
                Hai semua! Nice to meet you!! <br>
                rappuff, Untuk tau lebih detail tentang gue, langsung aja klik tombol dibawah ini ya
            </p>
            <a href="/about" class="btn btn-primary mt-3 text-white rounded-pill" style="width: 40%">
                About me
            </a>

            <a href="/ujian" class="btn btn-primary mt-3 text-white rounded-pill" style="width: 40%">
                Daftar Ujian
            </a>

        </div>
        <div class="col-md-6 p-5 d-none d-sm-block">
            <img src="./img/foto.jpeg" class="img-fluid shadow-lg">
        </div>
    </div>
</main>
@endsection