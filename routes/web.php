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

Route::resource('/landing', 'LandingController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index')->name('user');

Route::get('/documentation', 'LandingController@documentation')->name('documentation');

Route::get('/api_usage', 'HomeController@apiUsage')->name('api_usage');
