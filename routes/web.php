<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController; // THIS IS NECESSARY TO ACCES THE CONTROLLER

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

// IF YOU FOLLOWED THE TUTORIAL THE ONE THAT HE TEACHES WOULD NOT WORK SINCE IT WAS LARAVEL 6 AND AS OF NOW YOU ARE USING LARAVEL 8
// TO FIX THE ISSUE WE USE THIS LINK: https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8
Route::get('/pizzas', ); # ControllerName@actionFunctionInController
Route::get("/pizzas/{id}", [PizzaController::class, "show"]); # ControllerName@actionFunctionInController

/*Route::get('/pizzas', function () {
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
    ]);

    // OR LIKE THIS:
    return view('pizzas', [
        "pizza" => $pizza, 
        "page" => "Pizzas",
        "name" => request("name"),
        "age" => request("age")
    ]); 
});

// THE ROUTE BELOW DEMONSTRATE THE ROUTE PARAM WILDCARD
Route::get("/pizzas/{id}", function($id)
{
    // USE THE $id VARIABLE TO QUERY THE DB FOR A RECORD
    // return view('details', [ "page" => "Details", "id" => $id ]);
}); */