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

Route::get('/index', function () {
    $datiComics = config("comics");

    $datiView = [
        "comics" => $datiComics,
    ];

    return view('index', $datiView);
});


Route::get('/fumetto', function () {
    $datiComics = config("comics");

    $datiView = [
        "comics" => $datiComics,
    ];

    return view('fumetto', $datiView);
});