<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data['tittle'] = 'profile';
        return view('user/index', $data);
    }
}
