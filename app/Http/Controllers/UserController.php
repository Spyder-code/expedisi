<?php

namespace App\Http\Controllers;
use App\Company;
use App\Expedition;
use App\Transaction;
use App\Service;
use App\Chats;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $expedisi = Expedition::all();
        $perusahaan = Company::all();
        $jumlah_expedisi = Expedition::all()->count();;
        return view('user.index', ['expedisi' => $expedisi, 'perusahaan' => $perusahaan, 'jumlah_expedisi' => $jumlah_expedisi]);
    }

    public function wilayah()
    {
        $expedisi = Expedition::all();
        $perusahaan = Company::all();
        return view('user.wilayah', ['expedisi' => $expedisi, 'perusahaan' => $perusahaan]);
    }

    public function kontak()
    {
        $expedisi = Expedition::all();
        $perusahaan = Company::all();
        return view('user.kontak', ['expedisi' => $expedisi, 'perusahaan' => $perusahaan]);
    }

    public function tarif()
    {
        $expedisi = Expedition::all();
        $perusahaan = Company::all();
        return view('user.tarif', ['expedisi' => $expedisi, 'perusahaan' => $perusahaan]);
    }

    public function MasukPesan(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'email'  => 'required',
            'pesan' => 'required'
         ]);

        Chats::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'isi' => $request->pesan
        ]);

        return redirect('/kontak')->with('status','Pesan Terkirim');
    }

    public function CekTarif(Request $request)
    {
        $request->validate([
            'berat'  => 'required',
            'satuan'  => 'required',
            'expedisi' => 'required',
            'tujuan' => 'required',
            'harga' => 'required'
         ]);

        $Cekberat=$request->berat;
        $Ceksatuan=$request->satuan;
        $Cekexpedisi=$request->expedisi;
        $Cektujuan=$request->tujuan;
        $Cekharga=$request->harga;
        $expedisi = Expedition::all();
        $perusahaan = Company::all();
        return view('user.tampiltarif', ['expedisi' => $expedisi, 'perusahaan' => $perusahaan, 'Cekberat' => $Cekberat,
        'Ceksatuan' => $Ceksatuan, 'Cekexpedisi' => $Cekexpedisi,'Cektujuan' => $Cektujuan,'Cekharga' => $Cekharga]);
    }
}
