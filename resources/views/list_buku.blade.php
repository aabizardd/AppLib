@extends('layouts.navbar')

@section('addStyle')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection

@section('konten')
    <div class="card p-2" style="border-radius: 20px">

        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::has('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="card-body table-responsive">


            <a class="btn btn-primary mb-4" href="{{ route('buku.tambah_buku') }}"><i class="fas fa-plus"></i> Tambah
                Buku</a>

            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul Buku</th>
                        <th>Anak Judul</th>
                        <th>Pengarang</th>
                        <th>Penulis</th>
                        <th>Ilustrator</th>
                        <th>Editor</th>
                        <th>ISBN</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Kota Terbit</th>
                        <th>Jenis Buku</th>
                        <th>Rak Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($books as $item)
                        <tr>
                            <td>{{ $item->id_buku }}</td>
                            <td>{{ $item->judul_buku }}</td>
                            <td>{{ $item->anak_judul }}</td>
                            <td>{{ $item->pengarang }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->ilustrator }}</td>
                            <td>{{ $item->editor }}</td>
                            <td>{{ $item->isbn }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td>{{ $item->kota_terbit }}</td>
                            <td>{{ $item->jenis_buku }}</td>
                            <td>{{ $item->rak_buku }}</td>
                            <td>
                                <a href="{{ route('buku.delete', $item->id_buku) }}">
                                    <i class="fas fa-trash" style="color: red;font-size: 15px"></i>
                                </a>
                                &nbsp
                                <a href="{{ route('buku.detail', $item->id_buku) }}">
                                    <i class="fas fa-info-circle" style="color: blue;font-size: 15px"></i>
                                </a>
                            </td>

                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>

    {{-- <input type="search" class="form-control light-table-filter" data-table="table-hover" placeholder="Search..." /> --}}
@endsection


@section('addScript')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
