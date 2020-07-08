<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
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
    public function GantiIconOwner(Request $request)
    {
        if (file_exists(public_path('image/owner/',$request->oldImage))) {
            File::delete(public_path('image/owner/'.$request->oldImage));
                $request->validate([
                    // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                if ($files = $request->file('image')) {
                    $profileImage = $files->getClientOriginalName();
                    $files->move(public_path('image'), $profileImage);
                    $insert['image'] = "$profileImage";
                    User::where('id',$request->id)
                        ->update([
                        'nama' => $request->nama,
                        'deskripsi' => $request->deskripsi,
                        'image' =>  "$profileImage"

                ]);
                }
            return redirect('admin/owner')->with('status','Data berhasil di ubah!');
        }
    }
    public function GantiUsernameOwner(Request $request)
    {
        User::where('id',$request->id)
        ->update([
        'name' => $request->nama
        ]);
        return redirect('admin/owner')->with('status','Data berhasil di ubah!');
    }
    public function GantiNomorOwner(Request $request)
    {
        //
    }
    public function GantiPasswordOwner(Request $request)
    {
        $password = Auth::user()->password;
        if(Hash::check($request->pass1, $password)){
            User::where('id',$request->id)
            ->update([
            'password' => Hash::make($request->pass2)
            ]);
            return redirect('admin/owner')->with('status','Data berhasil di ubah!');
        } else {
            return redirect('admin/owner')->with('status','Data berhasil di ubah!');
        }

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
