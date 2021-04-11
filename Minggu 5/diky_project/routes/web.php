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

//Route::get('/', function () {
//    return view('welcome');
//});



//Route::get('/diky', function () {
//    return 'welcome to my blok';
//});


//Route::get('/belajar', function () {
    
//echo '<h1>Hello World</h1>';		
//echo '<p>Sedang Belajar Laravel</p>';
//});


//Route::get('page/{nomor}', function ($nomor) {
//    return 'ini halaman ke-' .$nomor;
//});





Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

