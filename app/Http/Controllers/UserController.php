<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\Pesan;

class UserController extends Controller
{
    public function userfilm()
    {
        //mengambil data dari tabel film
        $film = Film::get();
        //mengirim data ke view adminuser.blade.php
        return view('home', ['film' => $film]);
    }

    public function kursi()
    {
       
        return view('kursi');
    }

    public function editpesan($id)
    {
        //mengambil data dari tabel film berdasarkan id yang dipilih
        $film = DB::table('film')->where('id', $id)->get();
        //passing data film yang didapat ke view adminuseredit.blade.php 
        return view('pesan', ['film' => $film]);
    }

    public function pesan(Request $request, $id)
    {
        $film = DB::table('film')->where('id', $id)->get();
        
        DB::table('pesan')->insert([
            'nama_film' => $request->nama_film,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'jumlah' => $request->jumlah,
        ]);

        
 
    	// mengirim data pegawai ke view index
        return view('pesanan');
        
        // // alihkan halaman ke halaman home
        // return redirect('/pesanan');

    }

    public function pesanan()
    {
        $pesan = DB::table('pesan')->get();
        //mengambil data dari tabel film berdasarkan id yang dipilih
        // $pesan = DB::table('pesan')->where('id', $id)->get();
        //passing data film yang didapat ke view adminuseredit.blade.php 
        return view('pesanan',['pesan' => $pesan]);
    }
}

//yang itu aku nggak paham, dapet dari admin control punyamu
