<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table    = 'posts';
    protected $fillable = ['id', 'name', 'slug', 'content', 'thumb', 'status', 'parent'];

}