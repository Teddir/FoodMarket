@extends('layouts/base')

@section('head')
<!-- <link rel="stylesheet" href="{ 'css/dashboard.css' %}" /> -->
<link rel="stylesheet" type="text/css" href="{!! asset('/css/about.css') !!}">
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" /> -->

    @endsection
    @section('body')
    <div class="continer-fluid">
        <div class="img">
            <h1>About Us</h1>
        </div>
    </div>
        <div class="topheader"> 
            
        </div>
        <P class="isi">
            Sanni Food adalah salah satu produk makanan cepat saji Indonesia. 
            Sanni Food menyediakan produk makanan yang lezat dan berkualitas dengan resep asli Indonesia. 
            Kami hanya menggunakan bahan-bahan terbaik untuk proses produksi. 
            Produk kami bersertifikasi HALAL dari MUI dan diproduksi berdasarkan standard BPOM RI. </P>
        
            <h1 class="isi">Kontak</h1>
            <p style="padding-left:200px; font-family: Garamond;
            font-size: 40px;"> Nomor Telepon : 081234567890 </p>
    </<div>
    @endsection