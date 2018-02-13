<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table    = 'sliders';
    protected $fillable = ['id', 'url', 'thumb'];

}