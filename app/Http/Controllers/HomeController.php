<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('newindex');
    }
    public function about()
    {
        return view('about');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function homeadm()
    {
        $jadwalltayang = DB::table('jadwal')->get();
     

        return view('homeadm',['homeadm' => $jadwalltayang]);
    }
    

}

