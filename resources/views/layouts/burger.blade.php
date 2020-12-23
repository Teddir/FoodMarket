@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/burger.css') !!}">
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
    <h1>BURGER</h1>
    <div class="square">
        @foreach($burgers as $burger)
        <div class="bigburger">
            <img src="{{$burger['image']}}" class="img-fluid">
            <p class="product-title">{{$burger ['jenis_burger']}}</p>
            <p class="product-title">IDR {{$burger['harga']}}</p>
            <div class="quantity">
                <button id="min" type="button" class="glyphicon glyphicon-minus" onclick="hitung('-', {{$burger['id']}})"></button>
                <input style="width: 35px; border:none;text-align: center; margin-bottom:10px;" value="0" id="{{$burger['id']}}" />
                <button id="plus" type="button" class="glyphicon glyphicon-plus" onclick="hitung('+', {{$burger['id']}})"></button>
            </div>
            <button id="ProductBtn" type="button" class="btn btn-primary">Order Now</button>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('jscript')
<script language="JavaScript">
    function hitung(operasi,id) {
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