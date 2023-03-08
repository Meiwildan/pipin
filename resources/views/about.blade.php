@extends('layout.main')

@section('container')
    <h1> halaman about </h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="image/{{ $gambar }}"alt="{{ $nama }}" width="200px">
@endsection