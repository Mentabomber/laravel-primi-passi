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
Route::get('/faq', function () {
    $data = [
        'name' => 'Giacomo'
    ];
    return view('faq',$data);
});

Route::get('/shop', function () {
    $data = [
        'name' => 'Giacomo'
    ];
    return view('shop',$data);
});

Route::get('/infos', function () {
    $data = [
        'name' => 'Giacomo'
    ];
    return view('infos',$data);
});

Route::get('/', function () {


    $data = [
        'name' => 'Giacomo',
        'datas' => ['faq','infos','shop']
    ];

    return view('home', $data);
});




