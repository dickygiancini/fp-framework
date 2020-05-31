<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "film";

    protected $primaryKey = "id";

    protected $fillable = [
        'id', 'judul_film', 'poster', 'overview'
    ];

}
