<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('admin/perusahaan');
    }

    public function layanan()
    {
        return view('admin.layanan');
    }

    public function owner()
    {
        $user = User::all();
        return view('admin.owner',['owner' => $user->first()]);
    }

    public function perusahaan()
    {
        $result = Company::all();
        return view('admin.perusahaan', ['perusahaan' => $result->first()]);
    }

    public function expedisi()
    {
        return view('admin.expedisi');
    }

    public function transaksi()
    {
        return view('admin.transaksi');
    }

    public function pesan()
    {
        return view('admin.pesan');
    }
}
