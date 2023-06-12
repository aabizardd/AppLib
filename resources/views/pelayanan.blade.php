@extends('layouts.navbar')

@section('konten')
  <table>
      <tr class="pelayanan">
          <th>No</th>
          <th>Aspek Pelayanan perpustakaan</th>
          <th>Pilihan Jawaban</th>
          <th>Aksi</th>
          <th>Nilai</th>
      </tr>
      <tr>
        <td>3.1</td>
        <td colspan="4">Jenis pelayanan</td>
      </tr>
      <tr>
        <td>1</td>
        <td>Jenis layanan perpustakaan: 
            <p>1)	Layanan baca di tempat</p>
            <p>2)	Layanan sirkulasi</p>
            <p>3)	Layanan referensi</p>
            <p>4)	Layanan penelusuran informasi</p>
            <p>5)	Layanan bimbingan literasi informasi</p>
            <p>6)	Layanan penyediaan dokumen</p>
            <p>7)	Layanan silang layan</p>
            <p>8)	Layanan ekstensi</p>
        </td>
            <td>
                <input type="radio" name="selected" value="">a.Lebih dari 143 m²  <br>
                <input type="radio" name="selected" value="">b.108 - 143 m² <br>
                <input type="radio" name="selected" value="">c.72 - 107 m² <br>
                <input type="radio" name="selected" value="">d.36 - 71 m²<br>
                <input type="radio" name="selected" value="">e.Kurang dari 36 m²<br>
              </td>
        <td>
            <div class="dropdown">
            <button class="dropbtn">Data Pendukung</button>
                  <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
            </div>
          </td>
          <tr>
            <td>2</td>
            <td>Jenis layanan referensi yang disediakan:
                <p>1)	Layanan meja informasi (reference desk)</p>
                <p>2)	Layanan bimbingan penggunaan koleksi referensi</p>
                <p>3)	Layanan penelusuran</p>
                <p>4)	Layanan konsultasi </p>
                <p>5)	dan lain-lain</p>
            </td>
            <td>
                    <input type="radio" name="selected" value="">a.Lebih dari 143 m²  <br>
                    <input type="radio" name="selected" value="">b.108 - 143 m² <br>
                    <input type="radio" name="selected" value="">c.72 - 107 m² <br>
                    <input type="radio" name="selected" value="">d.36 - 71 m²<br>
                    <input type="radio" name="selected" value="">e.Kurang dari 36 m²<br>
            </td>
            <td>
                <div class="dropdown">
                    <button class="dropbtn">Data Pendukung</button>
                          <div class="dropdown-content">
                          <a href="#">Link 1</a>
                          <a href="#">Link 2</a>
                          <a href="#">Link 3</a>
                        </div>
                    </div>
            </td>
            <tr>
                <td>3.2</td>
                <td colspan="4">Jam Buka</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jam buka perpustakaan per minggu</td>
                <td> 
                    <input type="radio" name="selected" value="">a.Lebih dari 143 m²  <br>
                    <input type="radio" name="selected" value="">b.108 - 143 m² <br>
                    <input type="radio" name="selected" value="">c.72 - 107 m² <br>
                    <input type="radio" name="selected" value="">d.36 - 71 m²<br>
                    <input type="radio" name="selected" value="">e.Kurang dari 36 m²<br>
                </td>
                <td>
                    <div class="dropdown">
                        <button class="dropbtn">Data Pendukung</button>
                              <div class="dropdown-content">
                              <a href="#">Link 1</a>
                              <a href="#">Link 2</a>
                              <a href="#">Link 3</a>
                            </div>
                        </div>
                </td>
            </tr>
          

          </tr>
      </tr>
        </tr>
      
      
      

  </table>
  <a href="{{url('/halaman2') }}"><button class="buttonutama" style="vertical-align:middle"><span>Halaman Berikutnya </span></button></a>



@endsection

