<?php

namespace App\Http\Controllers;

use App\Company;
use App\Expedition;
use App\Transaction;
use App\Service;
use App\Chats;
use App\User;
use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $visitor = DB::table('access_logs')->count();
        $transaksi = Transaction::all()->count();
        $expedisi = Expedition::all()->count();
        return view('admin.index', ['transaksi' => $transaksi, 'expedisi' => $expedisi, 'visitor' => $visitor]);
    }

    public function showMainDashboard()
   {
      $aksesLog =  DB::table('access_logs')->orderBy('created_at', 'asc')->get();
      echo json_encode($aksesLog);
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

    public function area()
    {
        $expedisi = Expedition::all();
        $area = DB::table('areas')
                ->join('expeditions','expeditions.id','=','areas.id_expedisi')
                ->select('areas.*','expeditions.nama')
                ->paginate(10);
        return view('admin.area', ['expedisi' => $expedisi, 'area' => $area]);
    }

    public function transaksi()
    {
        $transaksi = Transaction::all();
        $expedisi = Expedition::all();
        $area = Area::all();
        return view('admin.transaksi', ['transaksi' => $transaksi, 'expedisi' => $expedisi, 'area' => $area]);
    }

    public function pesan()
    {
        $chat = Chats::all();
        return view('admin.pesan',['chat'=>$chat]);
    }

    public function laporan()
    {
        $transaksi = DB::table('transactions')
                    ->join('areas','areas.id','=','transactions.id_expedisi')
                    ->join('expeditions','expeditions.id','=','areas.id_expedisi')
                    ->select('transactions.*','expeditions.nama as nama_expedisi')
                    ->paginate(10);
        return view('admin.laporan',compact('transaksi'));
    }

}
