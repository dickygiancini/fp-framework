<?php

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
Route::get('/login', 'HomeController@login');

// Route::get('/list', function () {
//     return view('listfilm');
// });

Route::get('/list', 'ListController@index');