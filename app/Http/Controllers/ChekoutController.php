<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\chekout;
use Illuminate\Http\Request;

class ChekoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chekout = chekout::get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', null)->get();
        if (empty($cart)) {
            # code...
            return redirect('/cart')->with(['success', 'Tidak Ada Yang Dipesan']);
        }
        // dd($cart);
        
        $chekout = new Chekout;
        $chekout->name = auth()->user()->name;
        
        $pesanan = Cart::where('user_id', auth()->user()->id)->count('id');
        $quan = Cart::where('user_id', auth()->user()->id)->sum('quantity');
        $chekout->jumlah_pesanan = $pesanan;
        $chekout->quantity = $quan;
        
        $sum = Cart::where('user_id', auth()->user()->id)->sum('subtotal');
        $chekout->subtotal = $sum;
        $chekout->status = 1;
        $chekout->user_id = auth()->user()->id;
        $chekout->save();

        foreach ($cart as $carts){
            $carts->status = $chekout->status;
            $carts->update();
        }

        return redirect('/menu')->with(['success', 'Berhasil Chekout']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chekout  $chekout
     * @return \Illuminate\Http\Response
     */
    public function show(chekout $chekout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chekout  $chekout
     * @return \Illuminate\Http\Response
     */
    public function edit(chekout $chekout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chekout  $chekout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chekout $chekout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chekout  $chekout
     * @return \Illuminate\Http\Response
     */
    public function destroy(chekout $chekout)
    {
        //
    }
}
