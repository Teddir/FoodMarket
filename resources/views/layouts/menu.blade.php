@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/menu.css') !!}">
<!-- <link rel="stylesheet" href="{% static 'css/menu.css' %}" /> -->
<!-- <link rel="stylesheet" href="{{ URL::asset('css/menu.css') }}" /> -->
<!-- <link href="{{ asset('css/burger.css')}}"> -->
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="column">
            <a href="/pizza/">
                <div class="container-menu">
                    <div class="gambar2" style="text-align: center;">
                        <img style="zoom : 130%;" src="https://media.discordapp.net/attachments/767045716420853772/770509270097068052/bigpizza.png?width=672&height=452">
                        <div class="title" style="margin-left: 210px;">
                            <p>Pizza</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="column">
            <a href="/burger/">
                <div class="container-menu2">
                    <div class="gambar">
                        <img style="zoom : 130%;" src="https://media.discordapp.net/attachments/767045716420853772/768334564275781632/chicken.png">;
                        <div class="title" style="margin-left: 60px;margin-top:80px;">
                            <p>Burger</p>
                        </div>

                    </div>
                </div>
        </div>
        <div class="column">
            <a href="/minuman/">
                <div class="container-menu3">
                    <div class="gambar2">
                        <img style="zoom : 130%;" src="https://www.dsmenu.com/user-folder/images/0/644/1438219296-644.png">;
                        <div class="title" style="margin-left: 100px;">
                            <p>Beverage</p>
                        </div>
                    </div>
                </div>
        </div>
        @endsection