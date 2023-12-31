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
    return view('index');
});

Route::get('/beneficios', function () {
    return view('beneficios');
});

Route::get('/comousar', function () {
    return view('comousar');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/contato', function () {
    return view('contato');
});
