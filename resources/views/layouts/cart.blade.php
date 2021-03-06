@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/cart.css') !!}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

@endsection

@section('body')
<div class="container-fluid">
    <div class="back">
        <a href="/menu/">
            <i class="fa fa-arrow-left"> Continue Shopping</i>
        </a>
    </div>
    <h1>Shopping Cart</h1>
    <table id="cart" class="table table-hover table-condensed">
        
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        @foreach ($carts as $item)
        <tbody>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{$item->image}}" alt="..." class="img-responsive" /></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{$item->jenis_makananMinuman}}</h4>
                            {{-- <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p> --}}
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{number_format($item->harga)}}</td>
                <td data-th="Quantity">
                    <input type="number" class="form-control text-center" value="{{$item->quantity}}">
                </td>
                <td data-th="Subtotal" class="text-center">{{number_format($item->total)}}</td>
                <td class="actions" data-th="">
                    <a href="/cart_delete/{{$item->id}}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>Delete</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total 1.99</strong></td>
            </tr>
            <tr>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total {{number_format($subtotal)}}</strong></td>
                <form action="/chekout" method="post">@csrf

                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm"></i>Chekout</button>
                    </td>

                </form>
            </tr>
            <tr>
                
            </tr>
        </tfoot>
    </table>
</div>

@endsection