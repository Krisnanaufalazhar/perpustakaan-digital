<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul'        => 'Negeri 5 Menara',
                'penulis'      => 'Ahmad Fuadi',
                'penerbit'     => 'Gramedia Pustaka Utama',
                'tahun_terbit' => 2009,
                'kategori'     => 'Novel',
                'deskripsi'    => 'Kisah persahabatan dan perjuangan para santri dalam meraih cita-cita.',
            ],
            [
                'judul'        => 'Bumi Manusia',
                'penulis'      => 'Pramoedya Ananta Toer',
                'penerbit'     => 'Hasta Mitra',
                'tahun_terbit' => 1980,
                'kategori'     => 'Novel',
                'deskripsi'    => 'Novel yang mengangkat kehidupan Minke pada masa kolonial.',
            ],
            [
                'judul'        => 'Laskar Pelangi',
                'penulis'      => 'Andrea Hirata',
                'penerbit'     => 'Bentang Pustaka',
                'tahun_terbit' => 2005,
                'kategori'     => 'Novel',
                'deskripsi'    => 'Novel yang menceritakan perjuangan dan persahabatan anak-anak Belitung.',
            ],
        ];

        $this->db->table('buku')->insertBatch($data);
    }
}