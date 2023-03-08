@extends('layout\main')

@section('container')
<div class="title-top-mb-5">
      <h2 class="fw-bold">Data Buku</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="InputName" placeholder="Judul Buku" name="nama">
    <label for="InputName">Judul Buku</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputemailt" placeholder="Penulis" name="email">
    <label for="inputemail" class="form-label">Penulis</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="inputpenerbit" placeholder="Penerbit" name="pesan">
    <label for="inputpenerbit">Penerbit</label>
  </div>
  <button type="submit" class="btn btn-primary">kirim</button>
</form>

@endsection