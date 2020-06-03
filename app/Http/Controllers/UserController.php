<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\Pesan;
use App\Studio;

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
        // $film = DB::table('film')->where('id', $id)->get();
        
        $pesan = DB::table('pesan')->insert([
            'nama_film' => $request->nama_film,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            // 'studio' => $request->studio,
            // 'kursi' => $request->kursi,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            // 'total' => $request->total,
        ]);


        // $film = new Film();

        // $film->judul_film = $request->input('judul_film');
        // $film->poster = $request->input('poster');
        // $film->overview = $request->input('overview');
        // $film->jam = $request->input('jam');
        // $film->harga = $request->input('harga');
        // $film->studio_id = $request->input('studio_id');

        // if($request->hasFile('poster')){
        //     $file = $request->file('poster');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('data_file', $filename);
        //     $film->poster = $filename;
        // }else{
        //     return $request;
        //     $film->poster = '';
        // }

        // $film->save();

        
 
    	// mengirim data pegawai ke view index
        return redirect('/pesanan');
        
        // // alihkan halaman ke halaman home
        // return redirect('/pesanan');

    }

    public function pesanan()
    {
        // $pesan = DB::table('pesan')->get();
        // //mengambil data dari tabel film berdasarkan id yang dipilih
        // // $pesan = DB::table('pesan')->where('id', $id)->get();
        // //passing data film yang didapat ke view adminuseredit.blade.php 
        // return view('pesanan',['pesan' => $pesan]);


        // $pesan = DB::table('pesan')->get();
        $pesan = Pesan::get();
        //mengirim data ke view adminuser.blade.php
        return view('pemesanan', ['pesan' => $pesan]);
    }
}

//yang itu aku nggak paham, dapet dari admin control punyamu
