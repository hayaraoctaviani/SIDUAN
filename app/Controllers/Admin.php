<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin'
        ];
        
        echo view('admin/index',$data);
        
    }

    public function admin()
    {
        $data = [
            'title' => 'Login'
        ];
        
        echo view('admin/menu/login',$data);
        
    }
    public function aduan_masuk()
    {
        $data = [
            'title' => 'Aduan Masuk'
        ];
        
        echo view('admin/menu/aduan_masuk',$data);
        
    }
}
