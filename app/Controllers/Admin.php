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
        return view('admin/datauser', $data);
    }
}
