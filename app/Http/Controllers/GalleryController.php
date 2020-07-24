<?php

namespace App\Http\Controllers;
use App\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'caption'  => 'required',
            'tanggal' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
         if ($files = $request->file('gambar')) {
            $profileImage = $files->getClientOriginalName();
            $files->move(public_path('image/gallery/'), $profileImage);
            $insert['image'] = "$profileImage";
            Gallery::create([
            'gambar' =>  "$profileImage",
            'tanggal' => $request->tanggal,
            'caption' => $request->caption
            ]);
        }
        return redirect('/admin/gallery')->with('status','Data Gallery Berhasil Ditambahkan');
    }

    public function UpdateGallery(Request $request)
    {
        if (file_exists(public_path('image/gallery/',$request->oldImage))) {
            File::delete(public_path('image/gallery/'.$request->oldImage));
                $request->validate([
                    'caption'  => 'required',
                    'tanggal' => 'required',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                if ($files = $request->file('gambar')) {
                    $profileImage = $files->getClientOriginalName();
                    $files->move(public_path('image/gallery/'), $profileImage);
                    $insert['image'] = "$profileImage";
                    Gallery::where('id',$request->id)
                        ->update([
                        'gambar' =>  "$profileImage",
                        'tanggal' => $request->tanggal,
                        'caption' => $request->caption
                ]);
                }
        return redirect('/admin/gallery')->with('status','Data Gallery Berhasil Diupdate');
    }
  }
  public function HapusGallery(Request $request)
    {
        if (file_exists(public_path('image/gallery/',$request->Image))) {
            File::delete(public_path('image/gallery/'.$request->Image));
            $data = Gallery::find($request->id);
            $data->delete();
            return redirect('/admin/gallery')->with('status','Data Gallery Berhasil Dihapus');
        }
    }
}
