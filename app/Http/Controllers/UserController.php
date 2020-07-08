<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function wilayah()
    {
        return view('user.wilayah');
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function tarif()
    {
        return view('user.tarif');
    }
}
