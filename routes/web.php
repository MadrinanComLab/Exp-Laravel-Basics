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
    return view('welcome', ["page" => "Welcome"]); # YOU CAN SEE THE WELCOME FILE ON resources/views/welcome.blame.php
});

Route::get('/pizzas', function () {
    $pizza = [
        [ "type" => "Hawaiian", "base" => "Cheesy Crust" ],
        [ "type" => "Volcano", "base" => "Garlic Crust" ],
        [ "type" => "Veg Supreme", "base" => "Thin & Crispy" ]
    ];

    // ACCESSING QUERY PARAMETER
    // EXAMPLE LINK WITH QUERY PARAM: http://127.0.0.1:8000/pizzas?name=John%20Clifford&age=21
    // YOU CAN DO IT LIKE THIS:
    /* $name = request("name");
    $age = request("age");

    return view('pizzas', [
        "pizza" => $pizza, 
        "page" => "Pizzas",
        "name" => $name,
        "age" => $age
    ]); */

    // OR LIKE THIS:
    return view('pizzas', [
        "pizza" => $pizza, 
        "page" => "Pizzas",
        "name" => request("name"),
        "age" => request("age")
    ]);
});

// THE ROUTE BELOW DEMONSTRATE THE ROUTE PARAM WILDCARD
Route::get("/pizzas/{id}", function()
{
    return view('details', ["page" => "Details"]);
});