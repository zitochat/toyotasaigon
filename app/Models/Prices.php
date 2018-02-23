<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table    = 'price_data';
    protected $fillable = ['id', 'loai_xe', 'gia_xe', 'muc_phi', 'dang_ky', 'dang_kiem', 'duong_bo', 'bao_hiem'];

}