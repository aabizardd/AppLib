<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Buku extends Model
{
    use softDeletes;

    protected $table = 'buku';
    protected $fillable = [
        'id_buku',
        'judul_buku',
        'anak_judul',
        'pengarang',
        'penulis',
        'ilustrator',
        'editor',
        'isbn',
        'penerbit',
        'tahun_terbit',
        'kota_terbit',
        'jenis_buku',
        'rak_buku'
    ];

    protected $primaryKey = 'id_buku';

    protected $hidden;
}