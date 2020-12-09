@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/pizza.css') !!}">
<!-- <link rel="stylesheet" href="{% static 'css/pizza.css' %}" /> -->
<!-- <link rel="stylesheet" href="{{ URL::asset('css/pizza.css') }}" /> -->
<!-- <link href="{{ asset('css/pizza.css')}}"> -->
@endsection

@section('body')
    
    <div class="container-fluid">
        <div class="line"></div>
        <div class ="burgerbig"></div>
        <div class = "title"style="margin-left: 15px;">
            <p>Sanni's Pizza</p>
        </div>
        <div class ="subtitle">
            <p>Get a taste of our delicious pizzas</p> 
        </div>
    <div class ="bigburger">
        <img style="width: 603px;height: 374px; margin-top:250px; margin-left:220px;"
        src="https://media.discordapp.net/attachments/767045716420853772/770509270097068052/bigpizza.png?width=672&height=452">
    </div>
    <div>
    <div class="garis1" style="margin-top: 50px;"> </div>
    <div class ="garis2" style="margin-top:50px;"> </div>
    <div class ="menu"style="margin-top: 50px;">OUR MENU</div></div>
   
    <div class ="container-menu" style="margin-top: 80px; margin-left:250px;" >
    <div>
        <img style="width: 350px;height: 250px;margin-top :10px"
        src="https://media.discordapp.net/attachments/767045716420853772/770519948363038730/pizza1.png?width=678&height=452">
    </div>
    <div>
        <img style="width: 350px;height: 250px;margin-top :10px"
        src="https://media.discordapp.net/attachments/767045716420853772/770519960664539146/pizza2.png?width=678&height=452">
        
    </div>
    <div>
        <img style="width: 350px;height: 250px;margin-top :40px"
        src="https://media.discordapp.net/attachments/767045716420853772/770519962522484736/pizza3.png?width=679&height=452">
    </div>
    <div>
        <img style="width: 350px;height: 250px;margin-top :40px"
        src="https://media.discordapp.net/attachments/767045716420853772/770519966033641483/pizza4.png?width=677&height=452">
    </div>
    </div>
    <div>
        <div class="garis1" style="margin-top: 800px;">
        <div class ="menu">Additional Toppings</div></div>
            <div class="p"><p style="margin-top :90px;text-align:center;">Mozarella Crust<br>Rp.20.000</p></div>
            <div class="p"><p style="margin-top :115px;text-align:center;">Double Cheddar Cheese<br>Rp.15.000</p></div></div>
        <div class ="garis2" style="margin-top:800px;"> 
        <div class="p"><p style="margin-top :90px;text-align:center;">Thin-Crusty<br>Rp.10.000</p></div>
        <div class="p"><p style="margin-top :115px;text-align:center;">Extra Pepperoni<br>Rp.20.000</p></div>
    </div>

       
</div>
@endsection
