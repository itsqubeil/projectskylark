<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['tittle'] = 'home';
        return view('admin/index', $data);
    }

    public function datauser()
    {
        $data['tittle'] = 'Daftar User';
        $users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll();
        return view('admin/datauser', $data);
    }
}
