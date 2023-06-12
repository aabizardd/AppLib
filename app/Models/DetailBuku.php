<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBuku extends Model
{
    use HasFactory;

    protected $table = 'detail_buku';
    protected $guarded = [];

    protected $primaryKey = 'id_detail_buku';
}