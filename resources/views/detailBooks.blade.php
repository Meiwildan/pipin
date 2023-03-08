@extends('layout.main')

@section ('container')
    
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <img src="{{ asset('uploads/' . $books->gambar) }}" width="350" alt="...">
        </div>
        <div class="col-md-8 mt-4">
            <h5><strong>Judul Buku :</strong> {{ $books->judul}}</h5>
            <h5><strong>Pengarang :</strong> {{ $books->pengarang}}</h5>
            <h5><strong>Tahun Terbit:</strong> {{ $books->tahun_terbit}}</h5>
            <h5><strong>Penerbit :</strong> {{ $books->penerbit}}</h5>
            <a href="/" type="button" class="btn btn-danger">Kembali</a>
        </div>
    </div>

</div>

@endsection