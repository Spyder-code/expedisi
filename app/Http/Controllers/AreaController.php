<?php

namespace App\Http\Controllers;
use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'expedisi'  => 'required',
            'harga'  => 'required',
            'dari'  => 'required',
            'tujuan' => 'required'
         ]);

        Area::create([
            'id_expedisi' => $request->expedisi,
            'harga' => $request->harga,
            'dari' => $request->dari,
            'tujuan' => $request->tujuan

        ]);

        return redirect('/admin/expedisi')->with('status','Data Expedisi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getExpedisi(Request $request)
    {
        $id = $request->id;
        $data = Area::all()->where('id_expedisi',$id);
        return response($data);
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
    public function UpdateArea(Request $request)
    {
        $request->validate([
            'id_expedisi'  => 'required',
            'harga'  => 'required',
            'dari'  => 'required',
            'tujuan' => 'required'
         ]);

        //  echo $request->id_expedisi;
        //  echo $request->harga;
        //  echo $request->dari;
        //  echo $request->tujuan;

        Area::where('id',$request->id)
                        ->update([
                        'id_expedisi' => $request->id_expedisi,
                        'harga' => $request->harga,
                        'dari' => $request->dari,
                        'tujuan' => $request->tujuan
                ]);
        return redirect('admin/expedisi')->with('status','Data berhasil di ubah!');
    }

    public function HapusArea(Request $request)
    {
        $data = Area::find($request->id);
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
