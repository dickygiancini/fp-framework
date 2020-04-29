<?php

use App\Http\Controllers\AuthController;
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
Route::get('/home', function() {
    return view('home');
})->middleware('auth')->name('home');
Route::get('logout', 'AuthController@logout')->middleware('auth')->name('logout');

// Route::get('/list', function () {
//     return view('listfilm');
// });

Route::get('/list', 'ListController@index')->name('movies.index');
Route::get('/list/{movie}', 'ListController@show')->name('movies.show');