<?php

namespace App\Http\Controllers;

use App\Company;
use App\Expedition;
use App\Transaction;
use App\Service;
use App\Chats;
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
        return view('admin/index');
    }

    public function layanan()
    {
        $layanan = Service::all();
        return view('admin.layanan',['layanan' => $layanan]);
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
        $expedisi = Expedition::all();
        return view('admin.expedisi', ['expedisi' => $expedisi]);
    }

    public function transaksi()
    {
        $transaksi = Transaction::all();
        $expedisi = Expedition::all();
        return view('admin.transaksi', ['transaksi' => $transaksi, 'expedisi' => $expedisi]);
    }

    public function pesan()
    {
        $chat = Chats::all();
        return view('admin.pesan',['chat'=>$chat]);
    }


}
