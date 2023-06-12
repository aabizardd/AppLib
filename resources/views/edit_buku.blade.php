@extends('layouts.navbar')

@section('konten')
    <a class="btn btn-danger mb-4" href="{{ route('buku') }}"><i class="fas fa-arrow-left"></i> Kembali</a>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card" style="border-radius: 20px">

                <div class="card-header p-3">
                    <h4>Edit Data Buku</h4>
                </div>

                <div class="card-body p-4">

                    @if (Session::has('danger'))
                        <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
                            {{ Session::get('danger') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('buku.update') }}" method="POST">
                        <div class="row">

                            <div class="col">

                                @csrf

                                <input type="hidden" name="id_buku_lama" value="{{ $book->id_buku }}">

                                <div class="form-group">
                                    <label for="id_buku">ID Buku *</label>
                                    <input type="number" name="id_buku" class="form-control" placeholder="111382"
                                        value="{{ $book->id_buku }}">
                                </div>

                                <div class="form-group">
                                    <label for="judul_buku">Judul Buku *</label>
                                    <input type="text" name="judul_buku" class="form-control"
                                        placeholder="Karakter Bangsa" value="{{ $book->judul_buku }}">
                                </div>

                                <div class="form-group">
                                    <label for="anak_judul">Anak Judul </label>
                                    <input type="text" name="anak_judul" class="form-control"
                                        placeholder="Karakter Bangsa jilid 2" value="{{ $book->anak_judul }}">
                                </div>

                                <div class="form-group">
                                    <label for="pengarang">Pengarang </label>
                                    <input type="text" name="pengarang" class="form-control" placeholder="Ahmad Djarot"
                                        value="{{ $book->pengarang }}">
                                </div>

                                <div class="form-group">
                                    <label for="penulis">Penulis </label>
                                    <input type="text" name="penulis" class="form-control" placeholder="Ahlan Mahesta"
                                        value="{{ $book->penulis }}">
                                </div>

                                <div class="form-group">
                                    <label for="ilustrator">Ilustrator </label>
                                    <input type="text" name="ilustrator" class="form-control" placeholder="Yuanita"
                                        value="{{ $book->ilustrator }}">
                                </div>

                            </div>

                            <div class="col">

                                <div class="form-group">
                                    <label for="editor">Editor </label>
                                    <input type="text" name="editor" class="form-control" placeholder="Vira"
                                        value="{{ $book->editor }}">
                                </div>
                                <div class="form-group">
                                    <label for="isbn">ISBN </label>
                                    <input type="number" name="isbn" class="form-control" placeholder="15722823"
                                        value="{{ $book->isbn }}">
                                </div>
                                <div class="form-group">
                                    <label for="penerbit">Penerbit </label>
                                    <input type="text" name="penerbit" class="form-control" placeholder="Asep Sukaono"
                                        value="{{ $book->penerbit }}">
                                </div>
                                <div class="form-group">
                                    <label for="tahun_terbit">Tahun Terbit </label>
                                    <input type="number" name="tahun_terbit" class="form-control" placeholder="2007"
                                        value="{{ $book->tahun_terbit }}">
                                </div>
                                <div class="form-group">
                                    <label for="kota_terbit">Kota Terbit </label>
                                    <input type="text" name="kota_terbit" class="form-control" placeholder="solo"
                                        value="{{ $book->kota_terbit }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_buku">Jenis Buku </label>
                                    <input type="text" name="jenis_buku" class="form-control" placeholder="Fiksi"
                                        value="{{ $book->jenis_buku }}">
                                </div>
                                <div class="form-group">
                                    <label for="rak_buku">Rak Buku </label>
                                    <input type="number" name="rak_buku" class="form-control" placeholder="500"
                                        value="{{ $book->rak_buku }}">
                                </div>

                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary">Edit Buku</button>
                                </div>



                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card" style="border-radius: 20px">

                <div class="card-header p-3">
                    <h4>Edit Data Detail Buku</h4>
                </div>

                <div class="card-body p-4">

                    @if (Session::has('danger'))
                        <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
                            {{ Session::get('danger') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('buku.update_detail') }}" method="POST">
                        <div class="row">

                            <div class="col">

                                @csrf

                                <input type="hidden" name="id_detail_buku" value="{{ $book_detail->id_detail_buku }}">
                                <input type="hidden" name="id_buku" value="{{ $book_detail->id_buku }}">

                                <div class="form-group">
                                    <label for="nama_buku">Nama Buku</label>
                                    <input type="text" name="nama_buku" class="form-control" placeholder="111382"
                                        value="{{ $book->judul_buku }}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="nomor_panggil">Nomor Panggil</label>
                                    <input type="text" name="nomor_panggil" class="form-control"
                                        placeholder="SR 808.8 TR b" value="{{ $book_detail->nomor_panggil }}">
                                </div>

                                <div class="form-group">
                                    <label for="edisi_cetakan">Edisi Cetakan</label>
                                    <input type="text" name="edisi_cetakan" class="form-control" placeholder="Cet 6"
                                        value="{{ $book_detail->edisi_cetakan }}">
                                </div>

                                <div class="form-group">
                                    <label for="tahun_pengadaan">Tahun Pengadaan </label>
                                    <input type="number" name="tahun_pengadaan" class="form-control" placeholder="2007"
                                        value="{{ $book_detail->tahun_pengadaan }}">
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi_fisik">Deskripsi Fisik </label>
                                    <textarea class="form-control" name="deskripsi_fisik" id="deskripsi_fisik" cols="30" rows="5">{{ $book_detail->deskripsi_fisik }}</textarea>

                                </div>



                            </div>

                            <div class="col">

                                <div class="form-group">
                                    <label for="bahasa">Bahasa </label>
                                    <input type="text" name="bahasa" class="form-control" placeholder="Indonesia"
                                        value="{{ $book_detail->bahasa }}">
                                </div>

                                <div class="form-group">
                                    <label for="jumlah_buku">Jumlah Buku </label>
                                    <input type="number" name="jumlah_buku" class="form-control" placeholder="200"
                                        value="{{ $book_detail->jumlah_buku }}">
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{ $book_detail->alamat }}</textarea>

                                </div>

                                <div class="form-group">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input type="number" name="kode_pos" class="form-control" placeholder="55111"
                                        value="{{ $book_detail->kode_pos }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_website">Alamat Website</label>
                                    <input type="text" name="alamat_website" class="form-control"
                                        placeholder="www.namawebsite.com" value="{{ $book_detail->alamat_website }}">
                                </div>


                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary">Edit Detail Buku</button>
                                </div>



                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
