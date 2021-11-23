<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\PelatihModel;

use App\Models\KepletModel;

use App\Models\LisensiModel;

class Admin extends BaseController
{
    public function index()
    {
        // Dashboard Admin
        $pelatihmodel = new PelatihModel();
        $data = [
            'jumlah_pelatih' => $pelatihmodel->jumlah_pelatih(),
            'jumlah_lisensi' => $pelatihmodel->pelatih_lisensi(),
            'belum_lisensi' => $pelatihmodel->pelatih_belum_lisens(),
            'belumupdate' => $pelatihmodel->belumupdate(),
            'getpelatih' => $pelatihmodel->getpelatih(),
            'pelatih_regis' => $pelatihmodel->regist_pelatih(),
            'belum_regist' => $pelatihmodel->belum_regist(),
        ];


        return view('admin/dashboard', $data);
    }
}