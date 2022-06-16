@extends('layout')
<link href="/css/orders.css" rel="stylesheet">
@section('title')
    My orders
@endsection
@section('main_content')
    <main id="content">
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="name-page">
                <hr>
                <h1>Мої замовлення</h1>
                <hr>
            </div>
            <div>Користувач: {{ $user->name }}</div>
            <div class="about-us-information">
                @if(sizeof($orders)!=NULL)
                    @foreach($orders as $order)
                        <ul class="list">
                            <li>Номер: <span>{{$order->id}}</span></li>
                            <li>Дата: <span>{{$order->date}}</span></li>
                            <li>
                                <a href="{{route('orderDetail',$order->id)}}" class="link-order-detail">Подивитися деталі</a>
                                <hr>
                            </li>
                        </ul>
                    @endforeach
                @else
                    <div>Ви ще не оформили жодного замовлення...</div>
                    <div class="link-catalog"><a href="{{ route('catalog') }}" >Перейти до покупок</a><hr></div>
                @endif
            </div>
        </div>
    </main>
@endsection
