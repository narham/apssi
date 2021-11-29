<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Informasi extends BaseController
{
    public function index()
    {
        //
        // echo "Fitur Dalam Pengembangan";
        return view('info');
    }

    public function penting()
    {
        # code...

        return view('info');
        // echo "fitur dalam Pengembangan";
        // return view('penting');
    }
}