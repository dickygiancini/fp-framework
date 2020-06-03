<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = "pesan";
 
    protected $fillable = ['id', 'nama_film', 'tanggal', 'jam', 'jumlah', ];
}
