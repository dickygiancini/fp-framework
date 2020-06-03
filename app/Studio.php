<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{

    protected $table = "studio";
 
    protected $fillable = ['film_id', 'nama_studio',];
}
