<?php

namespace App\Http\Controllers;
use App\Expedition;
use Illuminate\Http\Request;

class ExpeditionController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required'
         ]);

        Expedition::create([
            'nama' => $request->nama
        ]);

        return redirect('/admin/expedisi')->with('status','Data Expedisi Berhasil Ditambahkan');
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
    public function UpdateExpedisi(Request $request)
    {
        $request->validate([
            'nama'  => 'required'
         ]);

        Expedition::where('id',$request->id)
                        ->update([
                        'nama' => $request->nama
                ]);
        return redirect('admin/expedisi')->with('status','Data berhasil di ubah!');
    }

    public function HapusExpedisi(Request $request)
    {
        $data = Expedition::find($request->id);
        $data->delete();
        //   return redirect('/admin/layanan')->with('status', 'Data berhasil dihapus');
        // Service::destroy($service->id);
        return redirect('/admin/expedisi')->with('status','Data Expedisi Berhasil Dihapus');
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
