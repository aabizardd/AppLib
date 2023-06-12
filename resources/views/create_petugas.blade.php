@extends('layouts.navbar')

@section('konten')
    <a class="btn btn-danger mb-4" href="{{ route('petugas') }}"><i class="fas fa-arrow-left"></i> Kembali</a>

    <div class="card" style="border-radius: 20px">

        <div class="card-header p-3">
            <h4>Data Petugas</h4>
        </div>

        <div class="card-body p-4">



            <form action="{{ route('petugas.store') }}" method="POST">


                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="petugas@mail.co.id">
                </div>

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Petugas A">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="">
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Tambah Petugas</button>
                </div>



            </form>

        </div>
    </div>
@endsection
