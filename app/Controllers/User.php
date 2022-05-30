<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
      $data = [
          'title'  => 'User'
      ];
      echo view ('/user/menu/index',$data);
    }

    public function save()
    {
        
        $data = $this->request->getVar();
        $validation = \Config\Services::validation();
        $validation->setRules(
            [
                'nama' => 'required|string',
                'aduan' => 'required|string',
                'jenis_aduan' => 'required|string',
                'bukti' => 'required'
            ]
        );
        $catch = $validation->withRequest($this->request)->run();

        if(!$catch)
        {
            $data['title'] = "User";
            echo view ('/user/menu/index',$data);
        }
        else{
            $session = \Config\Services::session();
            try{
                $userModel->insert();
                $session->setFlashdata('pesan', 'Data berhasil dikirim');
            }
            catch(\Exception $e){
                $session->setFlashdata('pesan', 'Terjadi kesalahan');
            }
            $data['title'] = "User";
        }

    }
}
