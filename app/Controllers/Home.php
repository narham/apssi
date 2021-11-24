<?php

namespace App\Controllers;

use App\Models\PelatihModel;

class Home extends BaseController
{

    public function __construct()
    {
        if (session()->get('akses') != 1) {
            echo 'Akses Ditolak';
            exit;
        }
    }
    public function index()
    {



        $PelatihModel = new PelatihModel();
        $id_pelatih = session()->get('id');
        $data = [
            'pelatih' => $PelatihModel->find($id_pelatih)
        ];
        //dd($data);
        return view('dashboard', $data);
    }
}