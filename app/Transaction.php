<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id_expedisi','customer','barang','berat','dari','tujuan','harga'];
}
