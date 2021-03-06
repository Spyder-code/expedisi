<?php

namespace App\Http\Controllers;

use App\Company;
use App\Expedition;
use App\Transaction;
use App\Service;
use App\Chats;
use App\User;
use App\Area;
use App\Gallery;
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
    //   $aksesLog2 =  DB::table('transactions')->orderBy('created_at', 'asc')->get();
      $a = json_encode($aksesLog);
    //   $b = json_encode($aksesLog2);
      echo $a;
    //   echo $b;
   }

   public function showMainDashboard2()
   {
      $aksesLog =  DB::table('transactions')->orderBy('created_at', 'asc')->get();
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

    public function gallery()
    {
        $gallery = Gallery::orderBy('id', 'DESC')->paginate(4);
        return view('admin.gallery', ['gallery' => $gallery]);
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

    public function detaillaporan(Request $request)
    {
            $data_laporan = Transaction::where('id','LIKE',$request->id)->get();
            return view('admin.detaillaporan', ['data_laporan' => $data_laporan]);
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

    public function EditLaporan(Request $request)
    {
            $request->validate([
                'pengirim' => 'required',
                'barang'  => 'required',
                'alamat_penerima'  => 'required',
                'kode'  => 'required'
                 ]);

            Transaction::where('id',$request->id)
                        ->update([
                        'pengirim' => $request->pengirim,
                        'barang' => $request->barang,
                        'alamat_penerima' => $request->alamat_penerima,
                        'kode' => $request->kode,
                ]);
            return redirect('/admin/laporanTransaksi')->with('status','Data berhasil di ubah!');

    }

}
