@extends('layouts.navbar')

@section('konten')
  <table>
      <tr class="pelayanan">
          <th>No</th>
          <th>Aspek Pengelolaan Perpustakaan </th>
          <th>Pilihan Jawaban</th>
          <th>Aksi</th>
          <th>Nilai</th>
      </tr>
      <tr>
        <td>6.1</td>
        <td colspan="4">Visi Misi</td>
      </tr>
      <tr>
        <td>1</td>
        <td>Perpustakaan memiliki dokumen visi, misi, tujuan, dan tugas yang dirumuskan secara tertulis</td>
            <td>
                <input type="radio" name="selected" value="">a.	Memiliki dokumen visi dan misi yang mengacu ke visi dan misi lembaga induk, dan ditetapkan oleh kepala sekolah<br>
                <input type="radio" name="selected" value="">b.	Memiliki dokumen visi dan misi yang ditetapkan oleh kepala sekolah<br>
                <input type="radio" name="selected" value="">c.	Memiliki dokumen visi dan misi yang ditetapkan oleh kepala perpustakaan <br>
                <input type="radio" name="selected" value="">d.	Memiliki dokumen visi dan misi yang belum ditetapkan <br>
                <input type="radio" name="selected" value="">e.	Tidak memiliki dokumen visi dan misi, tujuan, dan tugas  perpustakaan<br>
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
            <td>6.2</td>
            <td colspan="4">Anggaran</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Anggaran bersumber dari:
                <p>1)	APBN/APBD</p>
                <p>2)	Yayasan</p>
                <p>3)	Bantuan pendidikan</p>
                <p>4)	Sumbangan masyarakat</p>
                <p>5)	Kerjasama</p>
                <p>6)	Bantuan luar negeri</p>
                <p>7)	Hasil usaha</p>
            </td>
            <td>
                    <input type="radio" name="selected" value="">a.	Lebih dari 3 sumber <br>
                    <input type="radio" name="selected" value="">b.	3 sumber<br>
                    <input type="radio" name="selected" value="">c.	2 sumber<br>
                    <input type="radio" name="selected" value="">d.	1 sumber<br>
                    <input type="radio" name="selected" value="">e.	Tidak ada<br>
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
                <td>3</td>
                <td>Persentase jumlah anggaran perpustakaan rerata per tahun dalam 3 (tiga) tahun terakhir terhadap anggaran sekolah (di luar gaji dan belanja modal)</td>
                <td>
                    <input type="radio" name="selected" value="">a.	Lebih dari 6,99%<br>
                    <input type="radio" name="selected" value="">b.	6 - 6,99%<br>
                    <input type="radio" name="selected" value="">c.	5 - 5,99%<br>
                    <input type="radio" name="selected" value="">d.	4 - 4,99%<br>
                    <input type="radio" name="selected" value="">e.	Kurang dari 4 %<br>
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
                    <td>4</td>
                    <td>Presentase anggaran untuk pengembangan koleksi perpustakaan rerata per tahun dalam 3 (tiga) tahun terakhir terhadap anggaran perpustakaan</td>
                    <td>
                        <input type="radio" name="selected" value="">a.	45 - 50%<br>
                        <input type="radio" name="selected" value="">b.	40 - 44,99%<br>
                        <input type="radio" name="selected" value="">c.	35 - 39,99%<br>
                        <input type="radio" name="selected" value="">d.	30 - 34,99% atau 51 - 70%<br>
                        <input type="radio" name="selected" value="">e.	Kurang dari 30% atau lebih dari 70%<br>
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
                        <td>5</td>
                        <td>Jumlah dana partisipasi masyarakat/alumni yang tidak mengikat rerata per tahun dalam 3 (tiga) tahun terakhir</td>
                        <td>
                            <input type="radio" name="selected" value="">a.	Lebih dari 2,9 juta<br>
                            <input type="radio" name="selected" value="">b.	2 – 2,9 juta<br>
                            <input type="radio" name="selected" value="">c.	1 – 1,9 juta<br>
                            <input type="radio" name="selected" value="">d.	500 – 999 ribu<br>
                            <input type="radio" name="selected" value="">e.	Kurang dari 500 ribu<br>
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
                    <tr>
                        <td>6.2</td>
                        <td colspan="4">Penerapan Teknologi Informasi dan Komunikasi (TIK)</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Penerapan TIK untuk pengelolaan perpustakaan meliputi kegiatan:
                                <p>1)	Pengadaan </p>
                                <p>2)	Pengolahan </p>
                                <p>3)	Sirkulasi </p>
                                <p>4)	Penelusuran/OPAC</p>
                                <p>5)	Keanggotaan</p>
                                <p>6)	Promosi </p>
                                <p>7)	Laporan</p>
                        </td>
                        <td>
                            <input type="radio" name="selected" value="">a.	Lebih dari 4 kegiatan <br>
                            <input type="radio" name="selected" value="">b.	4 kegiatan <br>
                            <input type="radio" name="selected" value="">c.	3 kegiatan <br>
                            <input type="radio" name="selected" value="">d.	2 kegiatan <br>
                            <input type="radio" name="selected" value="">e.	Kurang dari 2 kegiatan <br>
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

                    </td>
                </tr>
          

          </tr>
      </tr>
        </tr>
      
      
      

  </table>
  <a href="{{url('/halaman2') }}"><button class="buttonutama" style="vertical-align:middle"><span>Halaman Berikutnya </span></button></a>



@endsection

