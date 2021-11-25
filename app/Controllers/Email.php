<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Email extends BaseController
{
    public function index()
    {
        return view('kotak_masuk');
    }

    public function tulis_email()
    {
        # code...
        return view('tulis_pesan');
    }

    public function baca()
    {
        # code...

        return view('baca_email');
    }
}