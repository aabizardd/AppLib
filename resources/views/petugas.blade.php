@extends('layouts.navbar')

@section('konten')
<input type="search" class="form-control light-table-filter" data-table="table-hover" placeholder="Search..." />        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Id Petugas</th>
        <th>Nama Petugas</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Handphone</th>
    </tr>
    </thead>
    <tbody>
      <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      </tr>
      <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      </tr>
      <tr>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      </tr>
    </tbody>
  </table>
      
  <a href="{{url('/halaman2') }}"><button class="buttonutama" style="vertical-align:middle"><span>Halaman Berikutnya </span></button></a>



@endsection

