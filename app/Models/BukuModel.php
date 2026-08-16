<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'kategori',
        'deskripsi',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
}