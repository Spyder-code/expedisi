<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    protected $fillable = ['nama','harga','dari','tujuan'];
}
