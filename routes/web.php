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
    return view('welcome'); # YOU CAN SEE THE WELCOME FILE ON resources/views/welcome.blame.php
});

Route::get('/pizzas', function () {
    return view('pizzas');
});

Route::get("/taena", function()
{
    return "GAGO!";
});