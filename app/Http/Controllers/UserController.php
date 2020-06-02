<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class UserController extends Controller
{
    public function userfilm()
    {
        //mengambil data dari tabel film
        $film = Film::get();
        //mengirim data ke view adminuser.blade.php
        return view('home', ['film' => $film]);
    }
}
