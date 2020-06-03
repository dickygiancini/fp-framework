<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = "pesan";
 
    protected $fillable = ['nama_film', 'tanggal', 'jumlah', 'harga', ];

    public function Studio()
    {
    	return $this->belongsToMany('App\Studio');
    }
}
