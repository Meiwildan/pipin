<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}
</style>
</head>
<body>

<h1>List Data Buku Perpustakaan</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Pengarang</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
  </tr>
  @php
      $no=1;
  @endphp
  @foreach ($books as $buku)
  <tr>
    <td> {{ $no++}}</td>
    <td> {{ $buku->judul}}</td>
    <td> {{ $buku->pengarang}}</td>
    <td> {{ $buku->penerbit}}</td>
    <td> {{ $buku->tahun_terbit}}</td>
  </tr>
  @endforeach
  
  
</table>

</body>
</html>


