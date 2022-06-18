<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    # BY DEFAULT THIS CLASS IS CONNECTED TO TABLE pizza IN DATABASE

    # IN CASE YOU WANT TO OVERRIDE THE DEFAULT, DO THE FF:
    # protected $table = "some_name";

    # $casts WAS NECESSARY BECAUSE COLUMN TOPPINGS HAS A DATA TYPE OF JSON, AND IN THE PizzaController WE ARE TRYING TO SAVE TO DATABASE A DATA TYPE OF ARRAY.
    # NOTE THAT SQL DATABASE DOES HAVE A TYPE OF AN ARRAY THAT WHY WE USE JSON INSTEAD
    # THE CAST BELOW WAS CONVERTING THE COLUMN toppings INTO ARRAY TO BE ABLE TO STORE THE ARRAY VALUE THAT WE ARE TRYING TO SAVE.
    protected $casts = [
        "toppings" => "array"
    ];
}
