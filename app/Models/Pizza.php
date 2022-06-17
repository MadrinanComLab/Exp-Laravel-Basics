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
}
