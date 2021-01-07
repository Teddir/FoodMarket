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
        @foreach($pizzas as $pizza)
        <div class="bigpizza">
            <form action="/cart_create_pizza/{{$pizza['id']}}" method="post">@csrf 
            <img src="{{$pizza['image']}}" class="img-fluid">
            <p class="product-title">{{$pizza['jenis_pizza']}}</p>
            <p class="product-title">IDR {{$pizza['harga']}}</p>
            <div class="quantity">
                <button id="min" type="button" class="glyphicon glyphicon-minus" onclick="hitung('-', {{$pizza['id']}})"></button>
                <label for="quantity">
                    <input style="width: 35px; border:none;text-align: center; margin-bottom:10px;" name="quantity" value="1" id="{{$pizza['id']}}" />
                </label>
                <button id="plus" type="button" class="glyphicon glyphicon-plus" onclick="hitung('+', {{$pizza['id']}})"></button>
            </div>
            <a id="ProductBtn" type="submit" class="btn btn-primary"><button type="submit" class="btn light"> Order Now </button></a>
        </form>
        </div>
        @endforeach
    </div>
</div>

@endsection
@section('jscript')
<script language="JavaScript">
    function hitung(operasi, id) {
        id = id.toString();   
        bil1 = document.getElementById(id).value;
        if (operasi == "+") {
            bil1 = parseInt(bil1);
            hasil = bil1 + 1;
            input = document.getElementById(id);
            input.value = hasil;
        }
        if (operasi == "-") {
            bil1 = parseInt(bil1);
            if (bil1 > 0) {
                hasil = bil1 - 1;
                input = document.getElementById(id);
                input.value = hasil;
            }
        }
    }
</script>
@endsection