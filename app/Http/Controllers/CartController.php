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
        $cart = Cart::all();
        return view ('layouts/cart', ['carts' => $cart]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([]);
        
        $burger = Burger::find($id);
        $pizza = Pizza::find($id);
        $drink = Drink::find($id);

        $cart = new Cart;
        if ($cart->jenis_makananMinuman = $burger->jenis_burger) {
            # code...
            $cart->jenis_makananMinuman = $burger->jenis_burger;
            $cart->quantity = $request->quantity;
            $cart->harga = $burger->harga;        
            $cart->image = $burger->image;
            $cart->total = $cart->harga * $cart->quantity;
            $cart->subtotal = $cart->total + $cart->total;
            $cart->save();


        } else if ($cart->jenis_makananMinuman = $pizza->jenis_pizza) {
            # code...
            $cart->jenis_makananMinuman = $pizza->jenis_pizza;
            $cart->quantity = $request->quantity;
            $cart->harga = $pizza->harga;        
            $cart->image = $pizza->image;
            $cart->total = $cart->harga * $cart->quantity;
            $cart->subtotal = $cart->total + $cart->total;
            $cart->save();

        } else if ($cart->jenis_makananMinuman = $drink->jenis_drink) {
            # code...
            $cart->jenis_makananMinuman = $drink->jenis_drink;
            $cart->quantity = $request->quantity;
            $cart->harga = $drink->harga;        
            $cart->image = $drink->image;
            $cart->total = $cart->harga * $cart->quantity;
            $cart->subtotal = $cart->total + $cart->total;
            $cart->save();
        }


        // dd($subtotal);
        return redirect('/cart')->with(['success', 'Berhasil Ditambah Ke Keranjang']);

    }

    public function destroy($id)
    {
        $cart = Cart::destroy($id);
        return redirect('/cart')->with(['succes', 'Berhasil Di Hapus']);
    }
}
