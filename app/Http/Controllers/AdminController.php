<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder
use App\Film;
use Illuminate\Support\Facades\Storage;

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
            'studio_id' => $request->studio_id,
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
       $film = DB::table('film')->where('id', $id)->delete();
       ///alihkan halaman ke halaman adminfilm.blade.php 
       return redirect('/adminfilm'); 
    }

    public function pemesanan()
    {
        
        return view('pemesanan');
    }
}
