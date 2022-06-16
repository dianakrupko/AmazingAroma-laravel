@extends('layout')

<link href="/css/order_done.css" rel="stylesheet">
@section('title')
    Order
@endsection

@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <button onclick="history.back()"><a href="#"><i class="icon-arrow-left"></i>Назад</a></button>
            </div>
            <div class="name-page">
                <hr>
                <h1>Замовлення №{{$order->id}}</h1>
                <hr>
            </div>
            <div class="order-hy">Ваше замовлення оформлено, чекайте дзвінка від менеджера для його остаточного підтвердження. Оплата здійснюється при отриманні.</div>
            <p class="thank">Щиро дякуємо за покупку!!!</p>
        <h2>Товари:</h2>
        @foreach($order->products as $product)
            <div class="product">
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
                    <div class="name-product"><a>{{$product->name}}</a></div>
                    <p>{{$product->price}}грн</p>
                    <p><span>{{$product->pivot->count}}шт</span></p>
                    <p>{{$product->getPriceForCount()}}грн</p>
                </div>
            </div>
        @endforeach
        <h2>Дані про замовника:</h2>
        <div class="info-user">
            <p>Замовник: <span>{{$request->name}}</span></p>
            <p>Номер телефону: <span>{{$request->phone}}</span></p>
            <p>Місто,де буде відправлено замовлення: <span>{{$request->city}}</span></p>
            @if($request->number_department)
            <p>Номер відділення Нової Пошти: <span>{{$request->number_department}}</span></p>
            @else
            <p>Вулиця і номер будинку: <span>{{$request->street}}</span></p>
            @endif
            <p>Сума замовлення:
            <span>{{$order->getTotalPrice()}}грн</span></p>
        </div>
            <div class="button-con">
        <button class="continue"><a href="{{route('home')}}">Продовжити покупку</a></button>
            </div>
        </div>
    </main>
@endsection
