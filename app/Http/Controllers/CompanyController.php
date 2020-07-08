<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request)
    {
        //
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
    public function GantiNama(Request $request)
    {
        Company::where('id',$request->id)
                        ->update([
                        'nama' => $request->nama
                ]);
        return redirect('admin/perusahaan')->with('status','Data berhasil di ubah!');
    }
    public function GantiAlamat(Request $request)
    {
        Company::where('id',$request->id)
                        ->update([
                        'alamat' => $request->alamat
                ]);
        return redirect('admin/perusahaan')->with('status','Data berhasil di ubah!');
    }
    public function GantiNomor(Request $request)
    {
        Company::where('id',$request->id)
                        ->update([
                        'nomor' => $request->nomor
                ]);
        return redirect('admin/perusahaan')->with('status','Data berhasil di ubah!');
    }

    public function GantiIcon(Request $request)
    {
        if (file_exists(public_path('image/perusahaan/',$request->oldImage))) {
            File::delete(public_path('image/perusahaan/'.$request->oldImage));
                $request->validate([
                    // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                if ($files = $request->file('image')) {
                    $profileImage = $files->getClientOriginalName();
                    $files->move(public_path('image/perusahaan/'), $profileImage);
                    $insert['image'] = "$profileImage";
                    Company::where('id',$request->id)
                        ->update([
                        'logo' =>  "$profileImage"

                ]);
                }
            return redirect('admin/perusahaan')->with('status','Data berhasil di ubah!');

        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
