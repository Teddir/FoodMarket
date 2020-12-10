@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/burger.css') !!}">
@endsection

@section('body')

<div class="utama">
    <div class="background-burger">
        <img src="https://lh3.googleusercontent.com/proxy/2b6UJkBXcIMAGNmw_XDy_u-pTRi-ecwSsk6XY5_FXDt5iNVWQfHShvSaKdBjpQudfE_WC7eCfMPayrtW3vXE3h8a5fG9EYr_ydw1pg7QeeqmMlAJhtIBEpcHYqeNnqZTmmU1DCeTMN-uFP2k">

    </div>
    <h1>BURGER</h1>
    <div class="square">
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/November2019/0nR6ysDcMRuLttBeJ4Ho.png">
            <h5 class="product-title" style="height: 38px;text-align: center;">SanSpicy</h5>
        </div>
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/Ppf2GZrRgXEd05rpGABx.png">
            <h5 class="product-title" style="height: 38px;text-align: center;">SanChicken</h5>
        </div>
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/BFcnGCUwrw4CxkxDkahi.png">
            <h5 class="product-title" style="height: 38px; font-weight: 700;text-align: center;">SanFish</h5>
        </div>
    </div>
    <div class="square">
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/AfYw3Cwp5YqZ7wOP9aQu.png">
            <h5 class="product-title" style="height: 38px;text-align: center;">Triple CheeseBurger</h5>
        </div>
        <div class="bigburger">
            <img src="https://nos.jkt-1.neo.id/mcdonalds/foods/October2019/apZ1DxDmKvwS2lV12Elp.png">
            <h5 class="product-title" style="height: 38px;text-align: center;">Double CheeeseBurger</h5>
        </div>
        <div class="bigburger">
            <img src="https://www.mcdelivery.co.id/id/static/1607075562825/assets/62/products/100147.png?">
            <h5 class="product-title" style="height: 38px;text-align: center;">Burger Deluxe</h5>
        </div>
    </div>


</div>

@endsection