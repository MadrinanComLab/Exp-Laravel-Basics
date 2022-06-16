<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // index() and show() ARE BOTH NAMING CONVENTION THAT IS COMMONLY USED BY LARAVEL DEVS
    public function index() // THIS IS FOR /pizzas
    {
        $pizza = [
            [ "type" => "Hawaiian", "base" => "Cheesy Crust" ],
            [ "type" => "Volcano", "base" => "Garlic Crust" ],
            [ "type" => "Veg Supreme", "base" => "Thin & Crispy" ]
        ];

        return view('pizzas', [
            "pizza" => $pizza, 
            "page" => "Pizzas",
            "name" => request("name"),
            "age" => request("age")
        ]);
    }

    public function show($id)
    {
        return view('details', [ "page" => "Details", "id" => $id ]);
    }
}
