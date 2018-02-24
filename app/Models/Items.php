<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table    = 'product_safe';
    protected $fillable = ['id', 'name', 'image', 'type', 'desciption'];

}