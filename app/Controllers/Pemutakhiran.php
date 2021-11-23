<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\PelatihModel;
use App\Models\KepletModel;
use App\Models\KategoriModel;
use App\Models\LisensiModel;



class Pemutakhiran extends BaseController
{
    public function index()
    {
        //
        $pelatihModel = new PelatihModel();
        $keplet = new KepletModel();
        $berkas = new BerkasModel();
        $id_pelatih = session()->get('id');
        $data = [
            'lisensi' => $berkas->where('id_pelatih', $id_pelatih)->findall(),
            'pelatih' => $pelatihModel->where('id_pelatih', $id_pelatih)->first(),
            'keplet' => $keplet->where('id_pelatih', $id_pelatih)->findall(),
        ];
        // dd($data);
        return view('pemutakhiran', $data);
    }

    public function uploadlisensi()
    {
        // upload lisensi
        $lisensiModel = new LisensiModel();

        $data = [

            'lisensi' => $lisensiModel->findAll(),
            'judul' => 'Form Upload Lisensi'
        ];
        // dd($data);
        return view('dokumen_lisensi', $data);
    }

    public function lisensi()
    {
        // proses Upload lisensi

        if ($this->validate([
            'id' => 'required',
            'lisensi' => [
                'rules' => 'uploaded[lisensi]|mime_in[lisensi,image/jpg,image/jpeg,image/gif,image/png]|max_size[lisensi,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'tgl_lisensi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lisensi Harus di isi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Lisensi Harap di masukkan',
                ]
            ]

        ])) {
            //    jika Valid

            $berkas = new BerkasModel();
            $dataBerkas = $this->request->getFile('lisensi');
            $fileName = $dataBerkas->getRandomName();
            $berkas->insert([
                'berkas' => $fileName,
                'id_pelatih' => $this->request->getVar('id'),
                'tgl_lisensi' => $this->request->getVar('tgl_lisensi'),
                'keterangan' => $this->request->getPost('keterangan')
            ]);
            $dataBerkas->move(ROOTPATH . 'lisensi/', $fileName);
            session()->setFlashdata('pesan', 'Berkas Berhasil diupload');
            return redirect()->to(base_url('pemutakhiran'));
        }
        // jika tidak
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }

    public function hapus_lisensi($id_berkas = null)
    {
        $berkas = new BerkasModel();
        $lisensi = $berkas->find($id_berkas);
        $datalisensi = $lisensi['berkas'];
        if (file_exists('lisensi/' . $datalisensi)) {
            unlink('lisensi/' . $datalisensi);
        }
        $data['berkas'] = $berkas->where('id_berkas', $id_berkas)->delete($id_berkas);
        session()->setFlashdata('pesan', 'Berkas Berhasil dihapus');
        return redirect()->to(base_url('pemutakhiran'));
    }

    public function dataKeplet()
    {
        $kategori = new KategoriModel();
        $data = [
            'kategori' => $kategori->findAll()
        ];
        return view('data_keplet', $data);
    }

    public function kepelatihan()
    {
        $keplet = new KepletModel();


        // validasi
        if ($this->validate([
            'id_pelatih' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Id Pelatih Harus dimasukkan'
                ]
            ],
            'nama_team' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Team harus di masukkan'
                ]
            ],
            'team' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Team Harus dmasukkan'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Harus di masukkan'

                ]

            ],
            'tahun_awal' => [
                'rules' => 'required|max_length[4]',
                'errors' => [
                    'required' => 'Tahun Awal di team Harus diisi',
                    'max_length' => 'Masukkan Tahun saja'
                ]
            ],
            'tahun_akhir' => [
                'rules' => 'required|max_length[4]',
                'errors' => [
                    'required' => 'Tahun Akhir di team Harus diisi',
                    'max_length' => 'Masukkan Tahun saja'
                ]
            ]
        ])) {
            //    Jika Valid
            $id_pelatih = session()->get('id');
            $data = [
                'id_pelatih' => $id_pelatih,
                'nama_team' => $this->request->getVar('nama_team'),
                'kategori_team' => $this->request->getVar('team'),
                'jabatan' => $this->request->getVar('jabatan'),
                'tahun_awal' => $this->request->getVar('tahun_awal'),
                'tahun_akhir' => $this->request->getVar('tahun_akhir'),
            ];

            $keplet->insert($data);
            session()->setFlashdata('pesan', 'Berkas Berhasil diupload');
            return redirect()->to(base_url('pemutakhiran'));
        } else {
            // jika tidak Valid
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function hapuskeplet($id_keplet = null)
    {
        $keplet = new KepletModel();
        $keplet->where('id_data_kepelatihan', $id_keplet)->delete($id_keplet);
        session()->setFlashdata('pesan', 'Berkas Berhasil dihapus');
        return redirect()->to(base_url('pemutakhiran'));
    }
}