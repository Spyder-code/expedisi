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
         mt_srand(10);
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
            'kode' => mt_rand()
        ]);
        return redirect('/admin/transaksi')->with('status','Data Transaksi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
