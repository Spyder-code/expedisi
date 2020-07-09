<?php

namespace App\Http\Controllers;
use App\Chats;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function HapusPesan(Request $request)
    {
        $data = Chats::find($request->id);
        $data->delete();
        return redirect('admin/pesan')->with('status','Pesan Berhasil Dihapus');
    }

}
