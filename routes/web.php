<?php

use App\Http\Controllers\standardDoubleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});


Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/kategori/horror', function () {
    return view('horror');
});

Route::get('/kategori/anime', function () {
    return view('anime');
});

Route::get('/kategori/love', function () {
    return view('love');
});