<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = "studio";
 
    protected $fillable = ['nama_studio', ];

    public function Film()
    {
    	return $this->belongsTo('App\Film');
    }

    public function Kursi()
    {
    	return $this->hasMany('App\Kursi');
    }

    public function Pesan()
    {
    	return $this->belongsToMany('App\Pesan');
    }
}
