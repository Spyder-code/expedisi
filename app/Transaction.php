<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id_expedisi','penerima','barang','berat','dari','tujuan','harga','pengirim','alamat_pengirim','alamat_penerima','kode','status'
    ];
}
