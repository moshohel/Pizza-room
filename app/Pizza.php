<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
  // protected $table = 'table_name';
  // converting array to json when saving into database
  // when we get that json back from this key (here topping) it will convert it into array
  protected $casts = [
    'toppings' => 'array'
  ];
}
