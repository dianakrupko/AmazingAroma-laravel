@extends('layout')
<link href="/css/orderDetail.css" rel="stylesheet">
@section('title')
    Order detail
@endsection
@section('main_content')
    <main id="content">
        <div class="container">
            <div class="back">
                <button onclick="history.back()"><a href="#"><i class="icon-arrow-left"></i>Назад</a></button>
            </div>
            <div class="name-page">
                <hr>
                <h1>Замовлення №{{$order->id}}</h1>
                <hr>
            </div>
            <div class="products">
                @foreach($products as $product)

                    <div class="product">
                        <a href="{{route('product',$product->id)}}">

                            <div class="product-photo">
                                @foreach($photos as $ph)
                                    @if($ph->id=="$product->id")
                                        @if($ph->name=='second')
                                            <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                            <div class="product-information">
                                <div class="name-product">
                                    <a>{{$product->name}}</a>
                                </div>
                                <p>{{$product->price}}грн</p>
                                <span>{{$product->pivot->count}}шт</span>
                                <p>{{$product->getPriceForCount()}}грн</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="total-price-order">Загальна сума замовленя: <span>{{$order->getTotalPrice()}}грн</span></div>
        </div>


    </main>
@endsection
