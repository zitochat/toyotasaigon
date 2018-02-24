<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table    = 'products';
    protected $fillable = ['id', 'slug', 'name', 'thumb', 'image', 'price', 'description', 'parent', 'show'];

}