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
    return view('home',[
        'title' => "Home Page",
        "image" => "strlord.jpg"
    ]);
});


Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile Page",
        "name" => "Rafif Fernanda",
        "email" => "rafiffernanda123@gmail.com",
        "subject" => "Full Stack Web Developer",
        "image" => "strlord.jpg"
    ]);
});

Route::get('/education', function () {
    return view('education',[
        "title" => "Education Page"
    ]);
});

