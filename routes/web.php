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
    return view('home');
}) ;

Route::get('/libri', function () {

    return view('comics.libri');
})->name = ("libri");

Route::get('/libri/{id}', function ($id) {
    $comics = config("comics");

    $foundLibro = null;

    foreach($comics as $i => $libro ) {
        if  ($libro["id"] === intval($id)) {
                
            $foundLibro = $libro;
            break;
        }
    }


    return view("comics.dettaglio", compact("foundLibro"));
})->name ("comics.dettaglio");



