@extends('layouts/base')

@section('head')
<!-- <link rel="stylesheet" href="{ 'css/dashboard.css' %}" /> -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" /> -->
@endsection


@section('body')
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" style="width: 100vw; height: 88vh;">
                <img style="width: 100vw; max-height: 110vh;"
                    src="https://thumbor.thedailymeal.com/7zfIDkh61JrdMi5-0uZX9B3_miY=//https://www.thedailymeal.com/sites/default/files/2017/06/12/0000000BurgerHEROIMAGEshutterstock.jpg"
                    alt="3 Burgers">
            </div>

            <div class="item" style="width: 100vw; height: 88vh;">
                <img style="width: 100%;"
                    src="https://subwallpaper.com/Widescreen-Wallpapers/cheese-pizza-wallpaper-1080p-For-Widescreen-Wallpaper.jpg"
                    alt="Cheese Pizza">
            </div>

            <div class="item" style="width: 100vw; height: 88vh;">
                <img style="width: 100%; max-height: 100vh;"
                    src="https://s1.1zoom.me/b5050/648/Hamburger_French_fries_Knife_Vegetables_Beer_Black_540436_3840x2400.jpg"
                    alt="Burger and Cola">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection