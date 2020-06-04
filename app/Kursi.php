<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    protected $table = "kursi";
 
    protected $fillable = [ 'studio_id', 'nama_kursi',  ];

    public function Studio()
    {
    	return $this->belongsTo('App\Studio');
    }
}
