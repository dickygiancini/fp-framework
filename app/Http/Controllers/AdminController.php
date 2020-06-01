<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder
use App\Film;

class AdminController extends Controller
{
    public function adminuser()
    {
        //mengambil data dari tabel users
        $users = DB::table('users')->get();
        //mengirim data ke view adminuser.blade.php
        return view('adminuser', ['users' => $users]);
    }

    public function edituser($id)
    {
        //mengambil data dari tabel users berdasarkan id yang dipilih
        $users = DB::table('users')->where('id', $id)->get();
        //passing data users yang didapat ke view adminuseredit.blade.php 
        return view('adminuser', ['users' => $users]);
    }

    public function updateuser(Request $request)
    {
        //update date users berdasarkan id
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        //alihkan halaman ke halaman adminuser.blade.php
        return redirect('/adminuser');
    }

    public function adminfilm()
    {
        //mengambil data dari tabel film
        $film = Film::get();
        //mengirim data ke view adminuser.blade.php
        return view('adminfilm', ['film' => $film]);
    }

    public function updatefilm(Request $request)
    {

        // $this->validate($request, [
		// 	'judul_film' => 'required',
        //     'poster' => 'required',
        //     'overview' => 'required',
        // ]);
        
        //==========================

        // $poster = $request->file('poster')->store('poster');
        
        // $request->film()->update([
        //     'poster' => $request->poster,
        // 'judul_film' => $request->judul_film,
        // 'overview' => $request->overview,

        // ]);

        //=============

        $this->validate($request, [
            'judul_film' => 'required',
            'poster' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'overview' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$poster = $request->file('poster');
 
		$nama_poster = time()."_".$poster->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
        $poster->move($tujuan_upload,$nama_poster);
        

        // Film::create([
        //     'judul_film' => $request->judul_film,
        //     'poster' => $request->poster,
        //     'overview' => $request->overview,
        // ]);

        DB::table('film')->where('id','=',input::get('id'))->update([
            'poster' => $request->poster,
            'judul_film' => $request->judul_film,
            'overview' => $request->overview, 
        ]);


        // $request->film()->update([
        // 'poster' => $request->poster,
        // 'judul_film' => $request->judul_film,
        // 'overview' => $request->overview,

        // ]);

        return redirect()->back();
    }
}
