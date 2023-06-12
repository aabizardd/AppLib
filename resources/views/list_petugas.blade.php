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


            <a class="btn btn-primary mb-4" href="{{ route('petugas.tambah') }}"><i class="fas fa-plus"></i> Tambah
                Petugas</a>

            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Petugas</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($user as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('petugas.delete', $item->id) }}">
                                    <i class="fas fa-trash" style="color: red;font-size: 15px"></i>
                                </a>
                                &nbsp
                                <a href="{{ route('petugas.detail', $item->id) }}">
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
