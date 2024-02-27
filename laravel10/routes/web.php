<?php

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

Route::get('/', function () {
    $teletubbies = array ("Tinky Winky", "Dipsy", "Lala", "Po");
    return view('welcome', ['name'=>'samantha', 'age'=>119, 
                            "teletubbies"=>$teletubbies]);
});

Route::get('/greeting', function(){
    return view("Greetings my brother");
});

Route::get('/welcome', function(){
    return view("welcome bro");
});

// Route::get("kategori/{name?}", function(){
//     if( ){

//     }
// });
