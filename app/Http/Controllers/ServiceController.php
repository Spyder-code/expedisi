<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
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
        $request->validate([
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($files = $request->file('image')) {
            $profileImage = $files->getClientOriginalName();
            $files->move(public_path('image'), $profileImage);
            $insert['image'] = "$profileImage";
            Service::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'image' => "$profileImage"

            ]);
            return redirect('/admin/layanan')->with('status','Data Layanan Berhasil Ditambahkan');
         }
         return redirect('/admin/layanan')->with('danger','Gagal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
       return view('admin.layanan', compact($service));
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
        $data = Service::find($id);
        $data->delete();
        //   return redirect('/admin/layanan')->with('status', 'Data berhasil dihapus');
        // Service::destroy($service->id);
        return redirect('/admin/layanan')->with('status','Data Layanan Berhasil Dihapus');
    }

    public function updateLayanan(Request $request)
    {
        if (file_exists(public_path('image/',$request->oldImage))) {
            File::delete(public_path('image/'.$request->oldImage));
                $request->validate([
                    // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                if ($files = $request->file('image')) {
                    $profileImage = $files->getClientOriginalName();
                    $files->move(public_path('image'), $profileImage);
                    $insert['image'] = "$profileImage";
                    Service::where('id',$request->id)
                        ->update([
                        'nama' => $request->nama,
                        'deskripsi' => $request->deskripsi,
                        'image' =>  "$profileImage"

                ]);
                }
            return redirect('admin/layanan')->with('status','Data berhasil di ubah!');
        }
    }
}

