<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    // Menampilkan daftar buku + Searching + Pagination
    public function index()
    {
        $keyword = $this->request->getGet('keyword');

        if ($keyword) {
            $this->bukuModel
                ->groupStart()
                ->like('judul', $keyword)
                ->orLike('penulis', $keyword)
                ->orLike('penerbit', $keyword)
                ->orLike('kategori', $keyword)
                ->groupEnd();
        }

        $data = [
            'title'   => 'Perpustakaan Digital',
            'buku'    => $this->bukuModel
                ->orderBy('id', 'DESC')
                ->paginate(5),
            'pager'   => $this->bukuModel->pager,
            'keyword' => $keyword
        ];

        return view('buku/index', $data);
    }

    // Menampilkan form tambah buku
    public function tambah()
    {
        return view('buku/tambah');
    }

    // Menyimpan buku baru
    public function simpan()
    {
        $this->bukuModel->insert([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'kategori'     => $this->request->getPost('kategori'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('/buku');
    }

    // Menampilkan form edit buku
    public function edit($id)
    {
        $buku = $this->bukuModel->find($id);

        if (!$buku) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data buku tidak ditemukan.'
            );
        }

        $data = [
            'title' => 'Edit Buku',
            'buku'  => $buku
        ];

        return view('buku/edit', $data);
    }

    // Memperbarui data buku
    public function update($id)
    {
        $this->bukuModel->update($id, [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'kategori'     => $this->request->getPost('kategori'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('/buku');
    }

    // Menghapus buku
    public function hapus($id)
    {
        $this->bukuModel->delete($id);

        return redirect()->to('/buku');
    }
}