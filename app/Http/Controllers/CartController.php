<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Drink;
use App\Models\Pizza;

class CartController extends Controller
{
    //
    public function create()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', null)->get();
        $subtotal = Cart::where('user_id', auth()->user()->id)->where('status', null)->sum('subtotal');
        dd($subtotal);
        return view('layouts/cart', ['carts' => $cart, 'subtotal' => $subtotal]);
    }

    public function burger(Request $request, $id)
    {
        $request->validate([]);

        $burger = Burger::find($id);

        $cart = new Cart;
        # code...
        $cart->user_id = auth()->user()->id;
        $cart->jenis_makananMinuman = $burger->jenis_burger;
        $cart->quantity = $request->quantity;
        $cart->harga = $burger->harga;
        $cart->image = $burger->image;
        $cart->total = $cart->harga * $cart->quantity;
        $cart->subtotal = $cart->total + $cart->total;
        $cart->save();

        return redirect('/cart')->with(['success', 'Berhasil Ditambah Ke Keranjang']);

    }

    public function pizza(Request $request, $id)
    {
        $request->validate([]);

        $pizza = Pizza::find($id);

        $cart = new Cart;
        # code...
        $cart->user_id = auth()->user()->id;
        $cart->jenis_makananMinuman = $pizza->jenis_pizza;
        $cart->quantity = $request->quantity;
        $cart->harga = $pizza->harga;
        $cart->image = $pizza->image;
        $cart->total = $cart->harga * $cart->quantity;
        $cart->subtotal = $cart->total + $cart->total;
        $cart->save();

        return redirect('/cart')->with(['success', 'Berhasil Ditambah Ke Keranjang']);

    }

    public function drink(Request $request, $id)
    {
        $request->validate([]);

        $drink = Drink::find($id);

        $cart = new Cart;
        # code...
        $cart->user_id = auth()->user()->id;
        $cart->jenis_makananMinuman = $drink->jenis_minuman;
        $cart->quantity = $request->quantity;
        $cart->harga = $drink->harga;
        $cart->image = $drink->image;
        $cart->total = $cart->harga * $cart->quantity;
        $cart->subtotal = $cart->total + $cart->total;
        $cart->save();

        return redirect('/cart')->with(['success', 'Berhasil Ditambah Ke Keranjang']);

    }



    public function destroy($id)
    {
        $cart = Cart::destroy($id);
        return redirect('/cart')->with(['succes', 'Berhasil Di Hapus']);
    }
}
