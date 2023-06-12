<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('buku')->insert([
            [
                'id_buku' => 111382,
                'judul_buku' => "KEBEBASAN WANITA JILID 2",
                'pengarang' => "ABDUL HALIM ABU SYUQQAH",
                'penulis' => "Trinil Windrowati",
                'ilustrator' => "Dewi Lestari",
                'editor' => "Cecillia Wang",
                'isbn' => "978-602-8755-02-3",
                'penerbit' => "GEMA INSANI PRESS",
                'tahun_terbit' => 1997,
                'kota_terbit' => "KOTA JAKARTA PUSAT",
                'jenis_buku' => "Cecillia Wang",
                'editor' => "FIKSI",
                'rak_buku' => 200,
                // 'information'
            ],
        ]
        );
    }
}