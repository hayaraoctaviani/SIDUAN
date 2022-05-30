<?php

namespace App\Controllers;
use App\Models\AduanModel;

class Admin extends BaseController
{
    protected $aduanModel;
    public function __construct()
    {
        
        $this->aduanModel = new AduanModel();
    }

    public function index()
    {
        $aduan = $this->aduanModel->findAll();
        $data = [
            'title' => 'Aduan Masuk',
            'aduan'=> $aduan
        ];

        echo view('admin/menu/aduan_masuk',$data);   
    }

    public function create()
    {
        
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/menu/create',$data);
    }

    public function save()
    {
        // saat mengklik tombol tambah sedangkan posisi form dalam keadaan kosong, maka ada data kosong yang berhasil ditambahkan/masuk ke database. Untuk mengatasi hal itu maka kita menambahkan validasi input seperti di bawah ini
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
           
            'jenis_aduan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
           
            'aduan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
            'bukti' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ]
           
        ])){

            // disini kita akan menampilkan pesan kesalahan
            // untuk menampilkan pesan kesalahan, terlebih dahulu kita harus mengambil/menangkap pesan kesalahan

            $validation = \Config\Services::validation();
            return redirect()->to('/admin/create')->withInput()->with('validation', $validation);
        }


        // getvar untuk mengambil request baik berupa post maupun get
        $this->aduanModel->save([
            'nama' => $this->request->getVar('nama'),
            'jenis_aduan' => $this->request->getVar('jenis_aduan'),
            'aduan' => $this->request->getVar('aduan'),
            'bukti' => $this->request->getVar('bukti')
        ]);
        
        // untuk menampilkan pesan menggunakan session bawaan ci4
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $this->aduanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin');
       
    }

    public function edit($id)
    {
        $data_id = $this->aduanModel->getDataId($id);
        $data = [
            'title' => 'Form Edit Data',
            'validation' => \Config\Services::validation(),
            'edit' => $data_id 
        ];
        return view('admin/menu/edit',$data);  
       
    }

    public function update()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
           
            'jenis_aduan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
           
            'aduan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
            'bukti' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ]
           
        ])){

            // disini kita akan menampilkan pesan kesalahan
            // untuk menampilkan pesan kesalahan, terlebih dahulu kita harus mengambil/menangkap pesan kesalahan

            $validation = \Config\Services::validation();
            return redirect()->to('/admin/create')->withInput()->with('validation', $validation);
        }

        // getvar untuk mengambil request baik berupa post maupun get
        $this->aduanModel->save([
            'nama' => $this->request->getVar('nama'),
            'jenis_aduan' => $this->request->getVar('jenis_aduan'),
            'aduan' => $this->request->getVar('aduan'),
            'bukti' => $this->request->getVar('bukti')
        ]);
        
        // untuk menampilkan pesan menggunakan session bawaan ci4
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin');
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];        
        echo view('admin/menu/login',$data);
        
    }


    public function aduan_telah_diproses()
    {
        $data = [
            'title' => 'Aduan Telah di Proses'
        ];        
        echo view('admin/menu/aduan_telah_diproses',$data);
        
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];        
        echo view('admin/menu/profil',$data);
        
    }
    public function logout()
    {
        echo view('admin/menu/login');        
    }

}
