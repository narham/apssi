<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Informasi extends BaseController
{
    public function index()
    {
        //
        return view('informasi');
    }

    public function penting()
    {
        # code...
        return view('penting');
    }
}