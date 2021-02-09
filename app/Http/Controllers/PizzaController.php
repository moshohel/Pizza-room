<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

  public function index() {

    // $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type', 'hawaiian')->get();
    $pizzas = Pizza::latest()->get();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    // $pizza = Pizza::find($id);
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function create() {
    return view('pizzas.create');
  }

  public function store() {

    // error_log is like console.log(), its shows in the terminal

    // error_log(request('name'));
    // error_log(request('type'));
    // error_log(request('base'));

    // saving data in date base from form
    $pizza = new Pizza();

    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = request('toppings');

    // error_log($pizza);
    $pizza->save();

    // sending session data using with
    return redirect('/')->with('msg', 'Thanks for your Order');

  }
  public function destroy($id) {

    $pizza = Pizza::findOrFail($id);
    $pizza->delete();

    return redirect('/pizzas');

  }
}
