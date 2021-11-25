<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\MenuModel;

class Menu extends BaseController
{
    public function index()
    {
        //
        $menumodel = new MenuModel();

        $data = [
            'menu' => $menumodel->findAll()
        ];


        return view('menu', $data);
    }

    public function add()
    {
        return view('add_menu');
    }

    public function simpan()
    {
        if ($this->validate([
            'menu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Menu Tidak boleh Kosong'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Link Menu Tidak boleh Kosong'
                ]
            ],
            'icon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Icon Menu Tidak boleh Kosong'
                ]
            ],
            'menu_utama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Parent Menu Tidak boleh Kosong'
                ]
            ],
            'akses' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Akses Menu Tidak boleh Kosong'
                ]
            ],

        ])) {
            // Jka Valid
            $menumodel = new MenuModel();
            $data = [
                'menu' => $this->request->getVar('menu'),
                'link' => $this->request->getVar('link'),
                'icon' => $this->request->getVar('icon'),
                'menu_utama' => $this->request->getVar('menu_utama'),
                'akses' => $this->request->getVar('akses'),
            ];
            $menumodel->insert($data);
            session()->setFlashdata('pesan', 'Menu Berhasil di tambahkan');
            return redirect()->to(base_url('menu'));
        } else {
            // jika tidak Valid
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id_menu = null)
    {
        return view('edit_menu');
    }

    public function update($id_menu = null)
    {
        # code...
    }

    public function hapus($id_menu = null)
    {
        # code...
    }
}