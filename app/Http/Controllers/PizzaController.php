<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    # THIS IS A CONTRUCTOR IN PHP
    /* public function __construct()
    {
        # THIS WILL PROTECT ALL THE ACTION INSIDE THIS CONTROLLER
        # BUT THERE IS AN ACTION HERE THAT WE DON'T WANT TO PROTECT SO IT WILL ALLOW THE ANNONYMOUS USERS TO ORDER A PIZZA
        # THESE ACTIONS ARE: create() AND store()
        $this->middleware("auth");
    } */

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
        # error_log(request("name")); # THIS WILL GET THE DATA IN INPUT FIELD THAT HAS A NAME OF 'name'
        # error_log(request("type")); # THIS WILL GET THE DATA IN INPUT FIELD THAT HAS A NAME OF 'type'
        # error_log(request("base")); # THIS WILL GET THE DATA IN INPUT FIELD THAT HAS A NAME OF 'base'

        # CREATE AN INSTANCE OF PIZZA CLASS 
        # REMEMBER THIS PIZZA WAS THE ELOQUENT MODEL THAT WE CREATED PREVIOUSLY
        # THROUGH ELOQUENT MODEL WE CAN DO OPERATION SUCH AS CRUD (CREATE - READ - UPDATE - DELETE)
        $pizza = new Pizza(); 

        $pizza->name = request("name"); # REMEMBER $pizza IS THE INSTANCE OF OUR DATABASE AND INSIDE THAT DATABASE WE HAVE TABLE 'pizzas' AND THAT TABLE HAS COLUMN 'name'  IN IT
        $pizza->type = request("type"); # REMEMBER $pizza IS THE INSTANCE OF OUR DATABASE AND INSIDE THAT DATABASE WE HAVE TABLE 'pizzas' AND THAT TABLE HAS COLUMN 'type'  IN IT
        $pizza->base = request("base"); # REMEMBER $pizza IS THE INSTANCE OF OUR DATABASE AND INSIDE THAT DATABASE WE HAVE TABLE 'pizzas' AND THAT TABLE HAS COLUMN 'base'  IN IT
        $pizza->toppings = request("toppings"); # REMEMBER $pizza IS THE INSTANCE OF OUR DATABASE AND INSIDE THAT DATABASE WE HAVE TABLE 'pizzas' AND THAT TABLE HAS COLUMN 'toppings'  IN IT
        
        # error_log(request("toppings"));
        $pizza->save();

        return redirect("/")->with("msg", "Thank you for ordering!"); # THIS IS HOW WE PASS DATA IN redirect() AND THIS DATA IS A SESSION DATA
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect(route("pizzas.index"));
    }
}
