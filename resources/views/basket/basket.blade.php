@extends('layout')

<link href="/css/basket.css" rel="stylesheet">
@section('title')
    Basket page
@endsection

@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <button onclick="history.back()"><a href="#"><i class="icon-arrow-left"></i>Назад</a></button>
            </div>
            <div class="name-page">
                <hr>
                <h1>Корзина</h1>
                <hr>
            </div>
            @if($order!=null)
            <div class="products">
                @foreach($order->products as $product)
                    @include('basket/product_area',$product)
                @endforeach
            </div>
            <div class="total-price">
                <div class="total-price-line">
                    <hr>
                </div>
                <div class="total-price-row">
                    <p>Всього:</p>
                    <span>{{$order->getTotalPrice()}}грн</span>
                </div>
            </div>
            <div class="ordering">
                @include('basket/form_order',['order'=>$order])
            </div>
            @else
                @component('errors')
                    Ви ще не додали товар до корзини...
                @endcomponent
            @endif
        </div>
    </main>
@endsection
