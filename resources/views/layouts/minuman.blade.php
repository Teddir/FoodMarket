@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/minuman.css') !!}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
@endsection

@section('body')

<div class="utama">
    <h1>DRINK</h1>
    <div class="square">
        <div class="minuman">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/D8LeTajQpFSuUbAsugUq.png" class="img-fluid">
            <p class="product-title">Coca Cola</p>
            <p class="product-title">IDR 12K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="minuman">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/5nIDFH9VTNE16UcjnnyW.png" class="img-fluid">
            <p class="product-title">Sprite</p>
            <p class="product-title">IDR 12K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="minuman">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/4kZxwImpnHUrHGb4KDL5.png" class="img-fluid">
            <p class="product-title">Fanta</p>
            <p class="product-title">IDR 12K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
    </div>
    <div class="square">
        <div class="minuman">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/QtyJ4HRDfdF07TI8VuBr.png" class="img-fluid">
            <p class="product-title">Mineral Water</p>
            <p class="product-title">IDR 10K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="minuman">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/mx9q6nIAPvTEzA6l2e61.png" class="img-fluid">
            <p class="product-title">Lemon Tea</p>
            <p class="product-title">IDR 12K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="minuman">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/qiex9z1po0AbZv5PDIhd.png" class="img-fluid">
            <p class="product-title">Iced Milo</p>
            <p class="product-title">IDR 12K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
    </div>
</div>

@endsection