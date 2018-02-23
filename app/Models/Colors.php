<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $table    = 'product_color';
    protected $fillable = ['id', 'color_id', 'image', 'product'];

}