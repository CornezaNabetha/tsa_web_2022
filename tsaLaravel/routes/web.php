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

Route::get('/', function () {
    return view('welcome');
});

//Anymous function
Route::get('/', function($id) {
    echo "Selamat Datang";
 });

 Route::get('/', function($id) {
    echo "NIM : 2241727006 <br> Nama : Corneza Nabetha Nuril Izza Hadne <br> Kelas : TSA Web B";
 });

 Route::get('/', function($id) {
    echo "Halaman Artikel dengan ID 100";
 });


Route::get('/articles/{id}', function($id) {
   echo "Ini merupakan halaman artikel dengan id ".$id;
});

