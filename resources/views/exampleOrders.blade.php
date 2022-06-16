@extends('layout')
<link href="/css/orders.css" rel="stylesheet">
@section('title')
    Orders example
@endsection
@section('main_content')
    <main id="content">
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="name-page">
                <hr>
                <h1>Продукт №{{ $product->id }} назва "{{$product->name}}"</h1>
                <hr>
            </div>
            <div class="about-us-information">
                @if(sizeof($orders)!=NULL)
                @foreach($orders as $order)
                <ul class="list">
                    <li>Замовлення: <span>{{$order->id}}</span>
                    </li>
                    <li>Дата: <span>{{$order->date}}</span></li>
                </ul>
                @endforeach
                @else
                    <div>Цього товару немає у жодному замовленні...</div>
                @endif
            </div>
        </div>
    </main>
@endsection

