<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $bukuModel = new BukuModel();

        $data = [
            'title'       => 'Dashboard',
            'nama'        => session()->get('nama'),
            'username'    => session()->get('username'),
            'totalBuku'   => $bukuModel->countAll(),
            'bukuTerbaru' => $bukuModel
                ->orderBy('id', 'DESC')
                ->findAll(5)
        ];

        return view('dashboard/index', $data);
    }
}