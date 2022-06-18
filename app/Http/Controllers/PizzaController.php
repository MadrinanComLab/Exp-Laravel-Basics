<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // index() and show() ARE BOTH NAMING CONVENTION THAT IS COMMONLY USED BY LARAVEL DEVS
    public function index() // THIS IS FOR /pizzas
    {
        // $pizza = [
        //     [ "type" => "Hawaiian", "base" => "Cheesy Crust" ],
        //     [ "type" => "Volcano", "base" => "Garlic Crust" ],
        //     [ "type" => "Veg Supreme", "base" => "Thin & Crispy" ]
        // ];

        # $pizza = Pizza::all(); # all() WAS EXISTING IN YOUR MODEL BY DEFAULT. IT DOESN'T MATTER IF IT WASN'T DEFINE IN WAS INHERITED IN Model CLASS
        # $pizza = Pizza::orderBy("name", "desc")->get();
        # $pizza = Pizza::orderBy("name");
        # $pizza = Pizza::where("type", "hawaiian")->get();
        $pizza = Pizza::latest()->get(); # RIGHT NOW, THIS IS SIMILAR TO Pizza::all();

        return view('pizzas.index', [
            "pizza" => $pizza, 
            "page" => "Pizzas",
            "name" => request("name"),
            "age" => request("age")
        ]);
    }

    public function show($id)
    {
        # $pizza = Pizza::find($id);
        $pizza = Pizza::findOrFail($id); # IF THE ITEM DOES NOT EXIST IT WIL REDIRECT TO A 404 PAGE INSTEAD OF DEBUGGING PAGE

        return view('pizzas.show', [ "page" => "Details", "pizza" => $pizza ]);
    }

    public function create()
    {
        return view('pizzas.create', [ "page" => "Create" ]);
    }

    public function store()
    {
        return redirect("/");
    }
}
