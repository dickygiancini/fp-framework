<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('newindex');
// });

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
//Route::get('/login', 'HomeController@login');
//Route::get('/register', 'HomeController@register');

Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');
Route::get('/home', 'UserController@userfilm')->middleware('auth')->name('home');
// Route::get('/home', function() {
//     return view('home');
// })->middleware('auth')->name('home');
Route::get('logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/homeadmin', function() {
    return view('homeadmin');
});

// Route::get('/loginadmin', function() {
//     return view('loginadmin');
// });

Route::get('/loginadmin', 'LoginAdminController@getLoginAdmin')->name('loginadmin');
Route::post('/loginadmin', 'LoginAdminController@postLoginAdmin' );
Route::get('/logoutadmin', 'LoginAdminController@LogoutAdmin' );



// Route::get('/list', function () {
//     return view('listfilm');
// });

Route::get('/list', 'ListController@index')->name('movies.index');
Route::get('/list/{movie}', 'ListController@show')->name('movies.show');
Route::get('/homeadm', 'AdminController@dashboard');

Route::get('/test', function(){
    Artisan::call('migrate');
    Artisan::call('db:seed');
});

//user
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/editpesan/{id}', 'UserController@editpesan');
Route::post('/pesan/{id}', 'UserController@pesan');
Route::get('/kursi', 'UserController@kursi');


Route::get('/userprofile', 'HomeController@userprofile');

//admin
Route::get('/adminuser', 'AdminController@adminuser');
Route::get('/adminuser/edit/{id}', 'AdminController@edituser');
Route::post('/adminuser/update', 'AdminController@updateuser');
Route::get('/adminuser/hapus/{id}', 'AdminController@hapususer');

Route::get('/adminfilm', 'AdminController@adminfilm');
Route::post('/adminfilm', 'AdminController@tambahfilm');
Route::get('/adminfilm/edit/{id}', 'AdminController@editfilm');
Route::post('/adminfilm/update/{id}', 'AdminController@updatefilm');
Route::get('/adminfilm/hapus/{id}', 'AdminController@hapusfilm');

Route::get('/pemesanan', 'AdminController@pemesanan');
Route::get('/pemesanan/hapus/{id}', 'AdminController@hapuspemesanan');

Route::get('/adminkursi', 'AdminController@kursi');

Route::get('/adminstudio', 'AdminController@studio');
Route::post('/adminstudio', 'AdminController@tambahstudio');
Route::get('/adminstudio/edit/{id}', 'AdminController@editstudio');
Route::post('/adminstudio/update/{id}', 'AdminController@updatestudio');
Route::get('/adminstudio/hapus/{id}', 'AdminController@hapusstudio');


// Route::get('/pesanan', 'UserController@pesanan');

