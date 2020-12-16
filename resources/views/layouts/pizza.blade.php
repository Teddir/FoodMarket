@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/pizza.css') !!}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
@endsection

@section('body')

<div class="container-fluid">
    <div class="back">
        <a href="/menu/">
            <i class="fa fa-arrow-left"> Menu</i>
        </a>
    </div>
    <h1>PIZZA</h1>
    <div class="square">
        <div class="bigpizza">
            <img src="https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/u/l/ultimatecheesemeltnew.png" class="img-fluid">
            <p class="product-title">Ultimate Cheese Melt</p>
            <p class="product-title">IDR 78K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigpizza">
            <img src="https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/c/h/cheese-mania-550x550px.png" class="img-fluid">
            <p class="product-title">Cheese Mania</p>
            <p class="product-title">IDR 45K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigpizza">
            <img src="https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/d/o/double-beef-burger-550x550px.png" class="img-fluid">
            <p class="product-title">Double Beef Burger</p>
            <p class="product-title">IDR 41K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
    </div>
    <div class="square">
        <div class="bigpizza">
            <img src="https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/m/e/meatzza-550x550px.png" class="img-fluid">
            <p class="product-title">MeatZza</p>
            <p class="product-title">IDR 40K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigpizza">
            <img src="https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/c/h/chicken-lovers-550x550px.png" class="img-fluid">
            <p class="product-title">Chicken Lovers</p>
            <p class="product-title">IDR 35K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        <div class="bigpizza">
            <img src="https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/g/r/grill-beef-supreme-550x550px.png" class="img-fluid">
            <p class="product-title">Grilled Beef Supreme</p>
            <p class="product-title">IDR 60K</p>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
    </div>
</div>

@endsection