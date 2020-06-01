<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

    protected $table = "film";
 
    protected $fillable = ['judul_film', 'poster', 'overview', ];
}
