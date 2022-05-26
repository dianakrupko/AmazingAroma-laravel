@extends('layout')
<link href="/css/orderDetail.css" rel="stylesheet">
@section('title')
    Order detail
@endsection
@section('main_content')
    <main id="content">
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="name-page">
                <hr>
                <h1>Замовлення №{{$order->id}}</h1>
                <hr>

            </div>
            <div>
                @foreach($products as $product)
                    <a href="{{route('product',$product->id)}}">
                        <ul class="list">
                        <li>Назва: <span>{{$product->name}}</span></li>
                        <li>Ціна: <span>{{$product->price}}</span></li>
                    </ul>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
@endsection
