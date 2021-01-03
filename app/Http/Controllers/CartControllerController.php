<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use App\Models\CartController;
use Illuminate\Http\Request;

class CartControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = CartController::get();
        // dd($cart);
        return view('layouts.cart', compact('cart'));
        // return redirect('/cart')->with (['sucsess'])
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = CartController::get();
        // dd($cart);
        return view('layouts.burger.createburger', compact('cart'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([]);

        $burger= Burger::get();

        CartController ::create([
            'price' => $burger->price,
            'quantity' => $request->quantity,
            'image'=> $burger->image,
        ]);

        return redirect('/cart')->with(['Status', 'Berhasil Ditamabah ke Cart']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartController  $cartController
     * @return \Illuminate\Http\Response
     */
    public function show(CartController $cartController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartController  $cartController
     * @return \Illuminate\Http\Response
     */
    public function edit(CartController $cartController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartController  $cartController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartController $cartController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartController  $cartController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartController $cartController)
    {
        //
    }
}
