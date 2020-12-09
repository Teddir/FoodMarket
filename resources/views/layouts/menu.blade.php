@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/menu.css') !!}">
<!-- <link rel="stylesheet" href="{% static 'css/burger.css' %}" /> -->
<!-- <link rel="stylesheet" href="{{ URL::asset('css/burger.css') }}" /> -->
<!-- <link href="{{ asset('css/burger.css')}}"> -->
@endsection

@section('body')
<div class="row">
  <div class="column">
      <div class = "container-menu">
      <div class = "gambar" style="text-align: center;">
      <img src="https://media.discordapp.net/attachments/767045716420853772/770509270097068052/bigpizza.png?width=672&height=452">
      <div class = "title"style="margin-left: 140px;">
            <p>Pizza</p>
        </div>
    </div>
</div>
</div>
<div class="column">
      <div class = "container-menu2">
      <div class = "gambar" >
      <img style="zoom : 130%;"src="https://media.discordapp.net/attachments/767045716420853772/768334576212246538/yesburger.jpg?width=672&height=452">;
      <div class = "title"style="margin-left: 180px;margin-top : 80px;">
            <p>Burgers</p>
        </div>
    
    </div>
</div>
</div>
<div class="column">
      <div class = "container-menu3">
</div>
</div>
@endsection