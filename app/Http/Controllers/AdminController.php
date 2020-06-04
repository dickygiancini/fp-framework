<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder
use App\Film;
use App\Studio;
use App\Pesan;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function adminstudio()
    {
        //mengambil data dari tabel studio
        $studio = DB::table('studio')->get();
        //mengirim data ke view adminstudio.blade.php
        return view('adminstudio', ['studio' => $studio]);
    }

    public function tambahstudio(Request $request)
    {

        $Studio = new Studio();

        $Studio->film_id = $request->input('film_id');
        $Studio->nama_studio = $request->input('nama_studio');

        $Studio->save();
        return redirect()->back();
    }

    public function editstudio($id)
    {
        $studio = DB::table('studio')->where('id', $id)->get();
        return view('adminstudioedit', ['studio' => $studio]);
    }

    public function updatestudio(Request $request, $id)
    {
        DB::table('studio')->where('id', $request->id)->update([
            'nama_studio' => $request->nama_studio,
        ]);

        $studio = Studio::find($id);

        $studio->save();

        return redirect('/adminstudio');
        
    }

    public function hapusstudio($id)
    {
       //menghapus data dari tabel film berdasarkan id yang dipilih
       $studio = DB::table('studio')->where('id', $id)->delete();
       ///alihkan halaman ke halaman adminfilm.blade.php 
       return redirect('/adminstudio'); 
    }

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
        return view('adminuseredit', ['users' => $users]);
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

    public function hapususer($id)
    {
        //menghapus data dari tabel users berdasarkan id yang dipilih
        $users = DB::table('users')->where('id', $id)->delete();
        ///alihkan halaman ke halaman adminuser.blade.php 
        return redirect('/adminuser');
    }

    public function dashboard()
    {
        //mengambil data dari tabel film
        $film = Film::all();
        //mengirim data ke view adminuser.blade.php
        return view('homeadm', ['film' => $film]);
    }

    public function adminfilm()
    {
        //mengambil data dari tabel film
        $film = Film::all();
        //mengirim data ke view adminuser.blade.php
        return view('adminfilm', ['film' => $film]);
    }

    public function tambahfilm(Request $request)
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

        // $this->validate($request, [
        //     'judul_film' => 'required',
        //     'poster' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		// 	'overview' => 'required',
		// ]);
 
		// // menyimpan data file yang diupload ke variabel $file
		// $poster = $request->file('poster');
 
		// $nama_poster = time()."_".$poster->getClientOriginalName();
 
      	// // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'data_file';
        // $poster->move($tujuan_upload,$nama_poster);
        
        // DB::table('film')->where('id','=',input::get('id'))->update([
        //     'poster' => $request->poster,
        //     'judul_film' => $request->judul_film,
        //     'overview' => $request->overview, 
            
        //===================
        // Film::create([
        //     'judul_film' => $request->judul_film,
        //     'poster' => $request->poster,
        //     'overview' => $request->overview,
        // ]);

        
        // ]);


        // $request->film()->update([
        // 'poster' => $request->poster,
        // 'judul_film' => $request->judul_film,
        // 'overview' => $request->overview,

        // ]);

        //memasukkan kedalam tabel film
        $film = new Film();

        $film->judul_film = $request->input('judul_film');
        $film->poster = $request->input('poster');
        $film->overview = $request->input('overview');
        $film->jam = $request->input('jam');
        $film->harga = $request->input('harga');
        // $film->studio_id = $request->input('studio_id');

        if($request->hasFile('poster')){
            $file = $request->file('poster');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('data_file', $filename);
            $film->poster = $filename;
        }else{
            return $request;
            $film->poster = '';
        }

        $film->save();

        //memasukkan kedalam tabel studio
        //mengambil id studio yang sama dengan id input
        $studio = DB::table('studio')->where('id', $request->input('studio_id'))->get();
        //mengambil nama film yang sama dnegan nama input
        $nama = DB::table('film')->where('judul_film', $request->input('judul_film'))->get();

        //iterate studio
        foreach ($studio as $studio){
        $studio1 = new studio();
            //iterate film
            foreach ($nama as $nama){
                $studio1->film_id = $nama->id;
            }
        $studio1->nama_studio = $studio->nama_studio;
    
        $studio1->save();
        }



        // $extension = $request->file('posterupload')->extension();
        // $postername = date('dmyHis').'.'.$extension;
        // $this->validete($request, [
        //     'posterupload' => 'required|file|image|mimes:jpeg,png,jpg|max:2048', 
        //     'judul_film' => 'required', 
        //     'overview' => 'required', 
        //     ]); 
        // $poster = Storage::putFileAs('data_file', $request->file('posterupload'), $postername);
        // Poster::create([ 
        //     'poster' => $request->postername,
        //     'judul_film' => $request->judul_film,
        //     'overview' => $request->overview,
        //     ]);

        return redirect()->back();
    }

    public function editfilm($id)
    {
        // $film = Film::find($id);
        // return view('adminfilmedit')->with('film', $film);

        $film = DB::table('film')->where('id', $id)->get();
        //passing data film yang didapat ke view adminufilmedit.blade.php 
        return view('adminfilmedit', ['film' => $film]);
    }
    

    public function updatefilm(Request $request, $id)
    {
        DB::table('film')->where('id', $request->id)->update([
            'judul_film' => $request->judul_film,
            'poster' => $request->poster,
            'overview' => $request->overview,
            'jam' => $request->jam,
            'harga' => $request->harga,
            // 'studio_id' => $request->studio_id,
        ]);

        $film = Film::find($id);

        // $film->poster = $request->input('poster');
        // $film->judul_film = $request->input('judul_poster');
        // $film->overview = $request->input('overview');

        if($request->hasFile('poster')){
            $file = $request->file('poster');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('data_file', $filename);
            $film->poster = $filename;
        }

        $film->save();

        return redirect('/adminfilm');
        
    }

    public function hapusfilm($id)
    {
       //menghapus data dari tabel film berdasarkan id yang dipilih   
       $studio = DB::table('studio')->where('film_id', $id)->delete();
       $film = DB::table('film')->where('id', $id)->delete();
       ///alihkan halaman ke halaman adminfilm.blade.php 
       return redirect('/adminfilm'); 
    }

    public function pemesanan()
    {  
        $pesan = Pesan::get();
        //mengirim data ke view adminuser.blade.php
        return view('pemesanan', ['pesan' => $pesan]);
    }

    public function hapuspemesanan($id)
    {
        $pesan = DB::table('pesan')->where('id', $id)->delete();
        ///alihkan halaman ke halaman adminfilm.blade.php 
        return redirect('/pemesanan'); 
    }

    public function studio()
    {
       //mengambil data dari tabel studio
       $studio = DB::table('studio')->get();
       //mengirim data ke view adminuser.blade.php
       return view('adminstudio', ['studio' => $studio]);
    }

    // public function tambahstudio(Request $request)
    // {
    //     $pesan = DB::table('studio')->insert([
    //         'film_id' => $request->film_id,
    //         'nama_studio' => $request->nama_studio,
    //     ]);

    //     return redirect()->back();
    // }

    // public function editstudio($id)
    // {
    //     $studio = DB::table('studio')->where('id', $id)->get();
    //     //passing data film yang didapat ke view adminufilmedit.blade.php 
    //     return view('adminstudioedit', ['studio' => $studio]);
    // }

    // public function updatestudio(Request $request, $id)
    // {
    //     DB::table('studio')->where('id', $request->id)->update([
    //         'film_id' => $request->film_id,
    //         'nama_studio' => $request->nama_studio,
    //     ]);

    //     return redirect('/adminstudio');
    // }

    // public function hapusstudio($id)
    // {
    //    //menghapus data dari tabel film berdasarkan id yang dipilih
    //    $film = DB::table('studio')->where('id', $id)->delete();
    //    ///alihkan halaman ke halaman adminfilm.blade.php 
    //    return redirect('/adminstudio'); 
    // }

    public function kursi()
    {
       
        return view('adminkursi');
    }



}
