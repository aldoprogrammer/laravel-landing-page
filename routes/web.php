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
    $data = ['page_name' => "Home"];
    return view('index')->with($data);
});


Route::get('/about', function () {
    $data = ['page_name' => "About"];
    return view('about')->with($data);
});


Route::get('/blogs', function () {
    $data = ['page_name' => "Blogs"];
    return view('blogs')->with($data);
});
