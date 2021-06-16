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
//     return view('welcome');
// });

Route::resource('/', 'HomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/transaction', 'HomeController@transactions')->name('transaction');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::post('/record', 'HomeController@record');

Route::get('status', 'HomeController@status')->name('status');

