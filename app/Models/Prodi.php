<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//cara memberi tau kalau kita ubah nma tabel dari prodis jadi prodi
#[Table('prodi')]
class Prodi extends Model
{
    use SoftDeletes;

    // Cara menargetkan
    protected $fillable = [
        'fakultas_id',
        'nama_prodi',
        'nama_kaprodi',
        'photo_kaprodi'
    ];
}
