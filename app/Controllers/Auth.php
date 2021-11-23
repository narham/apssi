<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\AuthModel;

use App\Models\PelatihModel;

class Auth extends BaseController
{
    public function index()
    {
        // form Login

        return view('Auth/login');
    }

    public function register()
    {
        // form register

        return view('Auth/register');
    }

    // Proses daftar
    public function daftar()
    {
        $Authmodel = new AuthModel();

        // Validasi Inputan
        if ($this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username Tidak Boleh Kosong',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[pelatih.email]',
                'errors' => [
                    'required' => 'email Tidak Boleh Kosong',
                    'valid_email' => 'Masukkan Email yang benar',
                    'is_unique' => 'email yang masukkan sudah terdaftar'
                ]
            ],
            'password' => 'required',
        ])) {
            // Jika Valid
            $pass = $this->request->getVar('password');
            $data = [
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password' => password_hash($pass, PASSWORD_DEFAULT)
            ];

            $Authmodel->insert($data);
            session()->setFlashdata('pesan', 'Akun sudah dibuat silahkan Login');
            return redirect()->to(base_url('Auth'));
        } else {
            // Jika Tidak Valid
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function login()
    {
        // Proses Login
        # ini Proses Login

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');


        // validasi Inputan Login
        if ($this->validate([
            'email'    => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'valid_email' => 'Check Email Ta, mungkin salah format',
                ],
            ],
            'password' => [
                'rules'  => 'required|matches[password]',
                'errors' => [
                    'required' => 'Masukkan Password ta.',
                    'matches' => 'Password anda Salah'
                ],
            ],
        ])) {
            //    Jika Valid
            $session = session();
            $authModel = new AuthModel();
            $data = $authModel->where('email', $email)->first();

            if ($data) {
                $pass = $data['password'];
                $verify_pass = password_verify($password, $pass);

                if ($verify_pass) {
                    if ($data['akses'] == '1') {
                        // Membuat Session
                        $ses_data = [

                            'id'     => $data['id_pelatih'],
                            'username'     => $data['username'],
                            'email'    => $data['email'],
                            'akses'    => $data['akses'],
                            'nama'    => $data['nama'],
                            'panggilan'    => $data['nama_panggilan'],
                            'foto'    => $data['foto'],
                            'login'     => TRUE
                        ];
                        // dd($ses_data);
                        $session->set($ses_data);

                        return redirect()->to(base_url('home'));
                    } #masukkan tambahan rule

                } else {
                    $session->setFlashdata('error', 'Password Salah');
                    return redirect()->to('Auth');
                }
            } else {
                $session->setFlashdata('error', 'Anda Belum terdaftar');
                return redirect()->to('Auth');
            }
        } else {

            // jika Tidak Valid
            session()->setFlashdata('error', 'Masukkan Email dan Password yang Benar');
            return redirect()->to(base_url('Auth'));
        }
    }


    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('Auth'));
    }
}