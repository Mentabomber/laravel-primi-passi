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

    return view('faq');
});

Route::get('/', function () {

    $names = [
        'name' => 'Giacomo'
    ];

    $files = [
       'datas' => ['faq','infos','shop']
    ];

    return view('home', $names, $files);
});




