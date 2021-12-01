<?php

namespace App\Controllers;

use App\Models\PelatihModel;

use App\Models\BerkasModel;

use App\Models\KepletModel;

class Home extends BaseController
{

    public function __construct()
    {

        if (session()->get('akses') != 1) {
            echo 'Access Anda di tolak';
            exit;
            return redirect()->to(base_url('Home'));
        }
    }
    public function index()
    {



        $PelatihModel = new PelatihModel();
        $berkas = new BerkasModel();
        $keplet = new KepletModel();
        $id_pelatih = session()->get('id');
        $data = [
            'pelatih' => $PelatihModel->find($id_pelatih),
            'lisensi' => $berkas->where('id_pelatih', $id_pelatih)->findall(),
            'keplet' => $keplet->where('id_pelatih', $id_pelatih)->findall(),
        ];
        //dd($data);
        return view('dashboard', $data);
    }
}