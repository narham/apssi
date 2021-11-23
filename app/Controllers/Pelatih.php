<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LisensiModel;
use App\Models\PelatihModel;
use App\Models\DokumenLisensi;

class Pelatih extends BaseController
{
    public function __construct()
    {
        if (isset($_SESSION['email'])) {
            return redirect()->to(base_url('Auth'));
        }
    }
    public function index()
    {
        // Tampilkan Form Isian Pelatih

        return view('profile');
    }

    public function add()
    {
        // Tambah Pelatih
        $data = [
            'judul' => 'Form Biodata Pelatih'
        ];
        return view('add_pelatih', $data);
    }

    public function add_proses()
    {
        $session = session();
        $PelatihModel = new PelatihModel();

        // Validasi Inputan
        if ($this->validate([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'lisensi' => 'required',
            'tgl_lisensi' => 'required',
            'notel' => 'required',


        ])) {
            //    Jika Valid
            $data = [
                'id_users' => $this->request->getVar('id'),
                'nama' => $this->request->getVar('nama'),
                'alamat' => $this->request->getVar('alamat'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'nik' => $this->request->getVar('nik'),
                'lisensi' => $this->request->getVar('lisensi'),
                'tgl_lisensi' => $this->request->getVar('tgl_lisensi'),
                'notel' => $this->request->getVar('notel'),

            ];


            $PelatihModel->insert($data);
            $session->setFlashdata('pesan', 'Data Bersahasil ditambahkan');
            return redirect()->to(base_url('Home'));
        } else {
            // Jika Tidak Valid
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id_pelatih = null)
    {
        $pelatihModel = new PelatihModel();
        $lisensiModel = new LisensiModel();

        $data = [
            'pelatih' => $pelatihModel->where('id_pelatih', $id_pelatih)->first(),
            'lisensi' => $lisensiModel->findAll(),
            'judul' => 'Form Biodata Pelatih'
        ];
        return view('add_pelatih', $data);
    }

    public function update($id_pelatih = null)
    {
        $session = session();
        $PelatihModel = new PelatihModel();
        $id_pelatih = $this->request->getVar('id');

        // Validasi Inputan
        if ($this->validate([
            'id' => 'required',
            'nama' => 'required',
            'nama_panggilan' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'lisensi' => 'required',
            'tgl_lisensi' => 'required',
            'notel' => 'required',


        ])) {
            //    Jika Valid
            $data = [

                'nama' => $this->request->getVar('nama'),
                'nama_panggilan' => $this->request->getVar('nama_panggilan'),
                'alamat' => $this->request->getVar('alamat'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'nik' => $this->request->getVar('nik'),
                'lisensi' => $this->request->getVar('lisensi'),
                'tgl_lisensi' => $this->request->getVar('tgl_lisensi'),
                'notel' => $this->request->getVar('notel'),

            ];


            $PelatihModel->update($id_pelatih, $data);
            $data_session = $PelatihModel->find($id_pelatih);
            $session->stop();
            $ses_data = [
                'id'       => $data_session['id_pelatih'],
                'nama'     => $data_session['nama'],
                'email'    => $data_session['email'],
                'level'    => $data_session['akses'],
                'lisensi'    => $data_session['lisensi'],
                'panggilan'    => $data_session['nama_panggilan'],
                'foto'    => $data_session['foto'],
                'login'     => TRUE
            ];
            $session->set($ses_data);
            $session->start($ses_data);
            session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
            return redirect()->to(base_url('Home'));
        } else {
            // Jika Tidak Valid
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function gantifoto($id_pelatih = null)
    {
        $PelatihModel = new PelatihModel();
        $id_pelatih = session()->get('id');
        return view('ganti_foto');
    }

    public function foto($id_pelatih = null)
    {
        $session = session();
        $PelatihModel = new PelatihModel();
        $id_pelatih = session()->get('id');

        $pelatih = $PelatihModel->find($id_pelatih);
        $foto = $this->request->getFile('foto');
        // dd($foto);
        if ($this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $fotolama = $pelatih['foto'];
                if (file_exists('foto/' . $fotolama)) {
                    unlink('foto/' . $fotolama);
                }
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'foto/', $newName);
                $data = [
                    'foto' => $newName
                ];
                $PelatihModel->update($id_pelatih, $data);
                $data_session = $PelatihModel->find($id_pelatih);
                $ses_data = [
                    'id'       => $data_session['id_pelatih'],
                    'nama'     => $data_session['nama'],
                    'email'    => $data_session['email'],
                    'level'    => $data_session['akses'],
                    'panggilan'    => $data_session['nama_panggilan'],
                    'lisensi'    => $data_session['lisensi'],
                    'foto'    => $data_session['foto'],
                    'login'     => TRUE
                ];

                $session->stop();
                $session->set($ses_data);
                $session->start($ses_data);
                session()->setFlashdata('pesan', 'Berkas Berhasil diupload');
                return redirect()->to(base_url('Pemutakhiran'));
            } else {
                // jika tdak valid
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function noreg($id_pelatih = null)
    {
        $pelatihModel = new PelatihModel();
        $pelatih = $pelatihModel->find($id_pelatih);
        $id = "00" . $pelatih['id_pelatih'];
        $noreg = "REG - " . date('Ymd - ') . $id . " / APSSI / SULSEL / " . date('Y');
        $data = [
            'noreg' => $noreg
        ];

        $pelatihModel->update($id_pelatih, $data);
        session()->setFlashdata('pesan', "Pelatih Berhasil di Registrasi");
        return redirect()->to(base_url('admin'));
    }
}