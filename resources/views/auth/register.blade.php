@extends('layouts\base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/register.css') !!}">
@endsection

@section('body')

<div class="container-fluid">
    <div class="register">
        <div class="sanni">
            <img class="logoimg"
                src="https://media.discordapp.net/attachments/651415548965421086/768396585121611776/IMG-8527.PNG?width=369&height=369">
        </div>
        <div class="input">
            <form>
                <div class="isian">
                    <h3 style="font-family: roboto; font-weight: 1000; width: fit-content; margin: auto; font-size: 25px;" >CREATE ACCOUNT</h3> <br>
                    <input class="baris1" type="text" placeholder="Name">
                    <input class="baris1" type="text" placeholder="Email">
                    <input class="baris1" type="password" placeholder="Password">
                    <input class="baris1" type="password" placeholder="Confirm Password">
                </div>
                <div class="signup">
                    <button class="bt_signup"> Sign Up </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection