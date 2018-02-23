<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Cpecifications extends Model
{
    protected $table    = 'product_specifications';
    protected $fillable = ['id', 'name', 'content', 'product'];

}