<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('homeadm');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function pesan()
    {
        return view('pesan');
    }
    public function userprofile()
    {
        return view('userprofile');
    }

}

