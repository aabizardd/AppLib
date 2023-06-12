@extends('layouts.navbar')

@section('konten')
    <a class="btn btn-danger mb-4" href="{{ route('buku') }}"><i class="fas fa-arrow-left"></i> Kembali</a>

    <div class="card" style="border-radius: 20px">

        <div class="card-header p-3">
            <h4>Data Buku</h4>
        </div>

        <div class="card-body p-4">



            <form action="{{ route('buku.store') }}" method="POST">
                <div class="row">

                    <div class="col">

                        @csrf
                        <div class="form-group">
                            <label for="id_buku">ID Buku *</label>
                            <input type="number" name="id_buku" class="form-control" placeholder="111382">
                        </div>

                        <div class="form-group">
                            <label for="judul_buku">Judul Buku *</label>
                            <input type="text" name="judul_buku" class="form-control" placeholder="Karakter Bangsa">
                        </div>

                        <div class="form-group">
                            <label for="anak_judul">Anak Judul </label>
                            <input type="text" name="anak_judul" class="form-control"
                                placeholder="Karakter Bangsa jilid 2">
                        </div>

                        <div class="form-group">
                            <label for="pengarang">Pengarang </label>
                            <input type="text" name="pengarang" class="form-control" placeholder="Ahmad Djarot">
                        </div>

                        <div class="form-group">
                            <label for="penulis">Penulis </label>
                            <input type="text" name="penulis" class="form-control" placeholder="Ahlan Mahesta">
                        </div>

                        <div class="form-group">
                            <label for="ilustrator">Ilustrator </label>
                            <input type="text" name="ilustrator" class="form-control" placeholder="Yuanita">
                        </div>

                    </div>

                    <div class="col">

                        <div class="form-group">
                            <label for="editor">Editor </label>
                            <input type="text" name="editor" class="form-control" placeholder="Vira">
                        </div>
                        <div class="form-group">
                            <label for="isbn">ISBN </label>
                            <input type="number" name="isbn" class="form-control" placeholder="15722823">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit </label>
                            <input type="text" name="penerbit" class="form-control" placeholder="Asep Sukaono">
                        </div>
                        <div class="form-group">
                            <label for="tahun_terbit">Tahun Terbit </label>
                            <input type="number" name="tahun_terbit" class="form-control" placeholder="2007">
                        </div>
                        <div class="form-group">
                            <label for="kota_terbit">Kota Terbit </label>
                            <input type="text" name="kota_terbit" class="form-control" placeholder="solo">
                        </div>
                        <div class="form-group">
                            <label for="jenis_buku">Jenis Buku </label>
                            <input type="text" name="jenis_buku" class="form-control" placeholder="Fiksi">
                        </div>
                        <div class="form-group">
                            <label for="rak_buku">Rak Buku </label>
                            <input type="number" name="rak_buku" class="form-control" placeholder="500">
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Buku</button>
                        </div>



                    </div>

                </div>
            </form>

        </div>
    </div>


    </div>
@endsection
