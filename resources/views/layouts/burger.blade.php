@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/burger.css') !!}">
<!-- <link rel="stylesheet" href="{% static 'css/burger.css' %}" /> -->
<!-- <link rel="stylesheet" href="{{ URL::asset('css/burger.css') }}" /> -->
<!-- <link href="{{ asset('css/burger.css')}}"> -->
@endsection

@section('body')

<div class="container-fluid">
    <div class="bigburger">
        <img style="width: 573px;height: 344px; margin-top:25px; margin-left:180px;"
            src="https://media.discordapp.net/attachments/767045716420853772/768334576212246538/yesburger.jpg">
        <div class="title">
            <p>Sanni's Hamburger</p>
            <p style="font-size: 18px;">We serve the best burger in town.</p>
        </div>
    </div>
    <div class="garis">
        <h2>OUR MENU<h2>
    </div>
    <div class="container-menu">
        <img style="width: 350px;height: 250px;"
            src="https://media.discordapp.net/attachments/767045716420853772/770258785381253120/beef.png?width=678&height=452">
        <img style="width: 350px;height: 250px;margin-left: 146px;"
            src="https://media.discordapp.net/attachments/767045716420853772/770258788921376788/chicken.png?width=678&height=452">
        <img style="width: 350px;height: 250px;"
            src="https://media.discordapp.net/attachments/767045716420853772/770258799264268358/veggie.png?width=677&height=452">
        <img style="width: 350px;height: 250px;margin-left: 146px;"
            src="https://media.discordapp.net/attachments/767045716420853772/770258794151542814/fishie.png?width=678&height=452">
    </div>
    <div class="garis">
        <h2>Additional Toppings</h2>
        <div class="topping">
            <div class="isi">
                <div class="tambah">
                <p style="width: 262px;">Mozarella Cheese<br>Rp.10.000</p>
                <p style="width: 262px;">Double Cheddar Cheese<br>Rp.7.000</p>
                </div>
                <div class="tambah">
                <p style="width: 262px;">Add-On Beef Patty<br>Rp.10.000</p>
                <p style="width: 262px;">Add-On Chicken Patty<br>Rp.10.000</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection