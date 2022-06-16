@extends('layout')

<link href="/css/favorite.css" rel="stylesheet">
@section('title')
    Favorite page
@endsection

@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <button onclick="history.back()"><a href="#"><i class="icon-arrow-left"></i>Назад</a></button>
            </div>
            <div class="name-page">
                <hr>
                <h1>Вподобані</h1>
                <hr>
            </div>
            <div class="products">
                @if($favorite!=null)
                @foreach($favorite->products as $product)
                    @include('favorite/product_area', $product)
                @endforeach
                @else
                    @component('errors')
                        Ви ще не додали товар до вподобаних...
                    @endcomponent
                @endif
            </div>
        </div>
    </main>
@endsection
