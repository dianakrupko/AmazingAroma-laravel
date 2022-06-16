@extends('layout')
<link href="/css/certificate.css" rel="stylesheet">
@section('title')
    About page
@endsection
@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <button onclick="history.back()"><a><i class="icon-arrow-left"></i>Назад</a></button>
            </div>
            <div class="name-page">
                <hr>
                <h1>сертифікати</h1>
                <hr>
            </div>
            <div class="certificate">
{{--                <div class="certificate-row1">--}}
{{--                    <div class="certificate-info">--}}
{{--                        <span>Хочете подарувати парфуми близькій людині, але не знаєте який аромат обрати?</span>--}}
{{--                        <span>Ми допоможемо вирішити вашу проблему - чудовим варіантом буде придбання “Подарункового сертифікату” на будь-яку суму.</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="certificate-row2">
                    <ul class="list">
                        <li><span>Сертифікат можна використовувати протягом року.</span></li>
                        <li><span>Діє на нові колекції.</span></li>
                        <li><span>Якщо після покупки парфумів гроші ще залишилися, вони автоматично перераховуються на карту
                        покупця.</span>
                        </li>
                    </ul>
                </div>
            </div>
                <div class="offer">Ми пропонуємо:</div>
            <div class="products">
                @if($products)
                    @foreach($products as $product)
                        @include('certificate/product_area', $product)
                    @endforeach
                @else
                    @component('errors')
                        Пусто...
                    @endcomponent
                @endif
            </div>
        </div>
    </main>
@endsection

