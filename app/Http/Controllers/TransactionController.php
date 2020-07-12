<?php

namespace App\Http\Controllers;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function InputTransaksi(Request $request)
    {
        $request->validate([
            'expedisi'  => 'required',
            'pengirim'  => 'required',
            'barang'  => 'required',
            'berat' => 'required',
            'dari' => 'required',
            'tujuan' => 'required',
            'harga' => 'required'
         ]);
         $kode = mt_rand(100000000, 999999999);
        Transaction::create([
            'id_expedisi' => $request->idExpedisi,
            'pengirim' => $request->pengirim,
            'penerima' => $request->penerima,
            'alamat_pengirim' => $request->alamatPengirim,
            'alamat_penerima' => $request->alamatPenerima,
            'barang' => $request->barang,
            'berat' => $request->berat,
            'dari' => $request->dari,
            'tujuan' => $request->tujuan,
            'harga' => $request->harga,
            'status' => 0,
            'kode' => $kode
        ]);
        return redirect('/admin/transaksi')->with('status','Data Transaksi berhasil ditambahkan!');
    }

    public function gantiStatus(Request $request)
    {
        $id = $request->id;
        $data = Transaction::where('id',$id)->first();
        $status = $data->status;
        if($status==0){
            Transaction::where('id',$id)->update(['status'=>1]);
            return back()->with('status','Status Ekspedisi berhasil diubah!');
        }else if($status==1){
            Transaction::where('id',$id)->update(['status'=>2]);
            return back()->with('status','Status Ekspedisi berhasil diubah!');
        }
    }

}
