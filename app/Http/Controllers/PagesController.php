<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view ('layouts/dashboard');
    }
    public function menu(){
        return view ('layouts/menu');
    }
    public function pizza(){
        $pizza = \App\Models\Pizza::all();
        return view ('layouts/pizza', ['pizzas' => $pizza]);
    }
    public function burger(){
        $burger = \App\Models\Burger::all();
        return view ('layouts/burger', ['burgers' => $burger]);
    }
    public function drink(){
        $drink = \App\Models\Drink::all();
        return view ('layouts/drink',['drinks' => $drink]);
    }
    public function about(){
        return view ('layouts/about');
    }
    public function location(){
        return view ('layouts/location');
    }
    public function profile(){
        return view ('layouts/profile');
    }
}
