@extends('layout')

<link href="/css/index.css" rel="stylesheet">
@section('title')
    Main page
@endsection
@section('main_content')
    <main>
        <div class="container">
            <div class="first">
                <div class="one">
                    <div class="text-info">
                        <h1>Amazing Aroma</h1>
                        <span>Знайди своє натхнення у флаконі з улюбленим ароматом</span>
                        <section class="buttons">
                            <div class="catalog-go">
                                <a href="{{ route('catalog',$count=9) }}" class="btn btn-1">
                                    <svg>
                                        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                    </svg>
                                    Перейти до каталогу
                                </a>
                            </div>
                        </section>
                        {{--                        <button><a href="{{ route('catalog',$count=9) }}">Перейти до каталогу</a></button>--}}
                        <div class="photo2"><img class="image" src="img/index/photo2.png" alt="photo2"></div>
                    </div>
                    <div class="photo1"><img class="image" src="img/index/photo1.png" alt="photo1"></div>
                </div>

            </div>
            <div class="catalog">
                <div class="catalog-row">
                    @foreach($products as $product)
                        @if($product->id==5)
                            @include('home.product_home', ['product'=>$product])
                        @endif
                        @if($product->id==11)
                            @include('home.product_home', ['product'=>$product])
                        @endif
                    @endforeach
                    <div class="im"><img src="/img/index/im1.png" class="image" alt="im"></div>
                </div>
                <div class="catalog-row">
                    <div class="im"><img src="/img/index/im2.png" class="image" alt="im"></div>
                    @foreach($products as $product)
                        @if($product->id==15)
                            @include('home.product_home', ['product'=>$product])
                        @endif
                        @if($product->id==10)
                            @include('home.product_home', ['product'=>$product])
                        @endif
                    @endforeach
                </div>
                <div class="go-to-catalog">
                    <div class="go-to-catalog-line">
                        <a href="{{route('catalog',$count=3)}}">Перейти до каталогу</a>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="certificate">
                <div class="certificate-row1">

                    <div class="certificate-image">
                        <img class="image" src="img/index/gift1.png" alt="gift1">
                    </div>
                    <div class="certificate-info">
                        <span>Хочете подарувати парфуми близькій людині, але не знаєте який аромат обрати?</span>
                        <span>Ми допоможемо вирішити вашу проблему - чудовим варіантом буде придбання “Подарункового сертифікату” на будь-яку суму.</span>
                    </div>

                </div>
                <div class="more-info">
                    <p><a href="{{ route('certificate') }}">Більше інформації</a></p>
                    <hr>
                </div>
                <div class="certificate-row2">
                    <ul class="list">
                        <li><span>Сертифікат можна використовувати протягом року.</span></li>
                        <li><span>Діє на нові колекції.</span></li>
                        <li><span>Якщо після покупки парфумів гроші ще залишилися, вони автоматично перераховуються на карту
                        покупця.</span>
                        </li>
                    </ul>
                    <div class="certificate-image">
                        <img class="image" src="img/index/gift2.png" alt="gift1">
                    </div>
                </div>
                <div class="go-to-certificate">
                    <div class="go-to-certificate-line">
                        <a href="{{ route('certificate') }}">{{ __('Придбати сертифікат') }}</a>
                        <hr>
                    </div>
                </div>
            </div>
            @include('home.form_consultation');
        </div>
    </main>
@endsection
