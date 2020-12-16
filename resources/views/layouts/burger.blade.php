@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/burger.css') !!}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
@endsection

@section('body')

<div class="utama">
    <h1>MENU BURGER</h1>
    <div class="square">
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/November2019/0nR6ysDcMRuLttBeJ4Ho.png" class="img-fluid">
            <p class="product-title">SanSpicy Chicken</p>
            <p class="product-title">IDR 35K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/August2020/8d2xhfpKHuHnJANcaMZ7.png" class="img-fluid">
            <p class="product-title">SanChicken</p>
            <p class="product-title">IDR 30K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/BFcnGCUwrw4CxkxDkahi.png" class="img-fluid">
            <p class="product-title">SanFish</p>
            <p class="product-title">IDR 32K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
    </div>
    <div class="square">
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/AfYw3Cwp5YqZ7wOP9aQu.png" class="img-fluid">
            <p class="product-title">Triple CheeseBurger</p>
            <p class="product-title">IDR 40K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/apZ1DxDmKvwS2lV12Elp.png" class="img-fluid">
            <p class="product-title">Double CheeeseBurger</p>
            <p class="product-title">IDR 35K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/August2020/NUfkX3XBlwCVguapu681.png" class="img-fluid">
            <p class="product-title">Burger Deluxe</p>
            <p class="product-title">IDR 30K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
    </div>
</div>

@endsection