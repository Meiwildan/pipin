@extends('layout.main')

@section('container')
     <h1>Halaman Beranda</h1>
    <div class="container">
        <div class="row">
            @foreach ($book as $buku )
            <div class="col-md-3 mt-3">
                <div class="card" style="width: 200">
                    <img src="{{ asset('uploads/' . $buku->gambar) }}" height="425" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $buku->judul}}</h5>
                      <p class="card-text">{{ $buku->pengarang}}</p>
                      <a href="{{ route('books.detail', $buku->id)}}"class="btn btn-primary">Lihat Buku</a>
                    </div>
                  </div>
               </div>
            @endforeach
        </div>
    </div>
           

           
    <div class="footer p-2 mt-3" >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                   
                </div>
            </div>
        </div>
    </div>
@endsection