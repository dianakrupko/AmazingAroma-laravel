@extends('layout')
<link href="/css/card.css" rel="stylesheet">
@section('title')
    Product page
@endsection
@section('main_content')
    @if(!$obj)
        <main>
            <div class="container">
                <div class="back">
                    <a href="#"><i class="icon-arrow-left"></i>Назад</a>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="product-photo col-6">
                            <img class="image" src="{{ $obj['image'] }}" alt="">
                        </div>
                        <div class="text-info col-6">
                            <h1 class="title">{{ $obj['name'] }}</h1>
                            <div class="category">
                                <div class="women">
                                    <h3>women</h3>
                                    <div class="rectangle">{{ $obj['women'] }}</div>
                                </div>
                                <div class="men"><h3>men</h3>
                                    <div class="rectangle">{{ $obj['men'] }}</div>
                                </div>
                            </div>
                            <div class="price">
                                <h3>Ціна:</h3>
                                <h2>{{ $obj['price'] }}</h2>
                            </div>
                            <div class="cart-like">
                                <button class="buy">Купити</button>
                                <div class="like"><i class="icon-favorite"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <h2>Аромат:</h2>
                    <h3>{{ $obj['aroma'] }}</h3>
                </div>
            </div>
        </main>
    @else
        @component('errors')
            На жаль, дані не знайдено..
        @endcomponent
    @endif
@endsection

