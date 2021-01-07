@extends('layouts\base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/register.css') !!}">
@endsection

@section('body')

<div class="container-fluid">
    <div class="register">
        <div class="sanni">
            <img class="logoimg" src="https://media.discordapp.net/attachments/651415548965421086/768396585121611776/IMG-8527.PNG?width=369&height=369">
        </div>
        <div class="input" style="border-radius: 25px">
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
            @endif

            @if(count($errors) > 0)
                <div>
                    <ul>
                    @foreach($errors-> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif


            <form method="POST" action="{{ url('/register/check')}}">
                {{ csrf_field() }}
                <div class="isian">
                    <h3 style="font-family: roboto; font-weight: 1000; width: fit-content; margin: auto; font-size: 25px;">CREATE ACCOUNT</h3> <br>
                    <input name="name" class="baris1" type="text" placeholder="Name">
                    <input name="email" class="baris1" type="email" placeholder="Email">
                    <input  name="password"class="baris1" type="password" placeholder="Password">
                    <input name="password_confirm" class="baris1" type="password" placeholder="Confirm Password">
                </div>
                <div class="signup">
                    <button class="bt_signup"> Register </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection