<?php

namespace App\Http\Controllers;
use App\Chats;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function destroy($id)
    {
        $data = Chats::find($id);
        $data->delete();
        return redirect('/admin/pesan')->with('status','Data Pesan Berhasil Dihapus');
    }
    
}
