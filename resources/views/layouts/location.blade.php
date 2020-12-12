@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/location.css') !!}">
<!-- <link rel="stylesheet" href="{% static 'css/location.css' %}" /> -->
<!-- <link rel="stylesheet" href="{{ URL::asset('css/location.css') }}" /> -->
<!-- <link href="{{ asset('css/location.css')}}"> -->
@endsection

@section('body')
<div class="title"><p>Our Location</p></div>
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe style="margin-left:260px;margin-top : 30px;border-radius:30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.253528373512!2d106.8046028147691!3d-6.230269895490098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15b30d89e2f%3A0x36d3e4c4cc53ad68!2sJl.%20Senopati%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1607769939511!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></iframe>
</div>
@endsection