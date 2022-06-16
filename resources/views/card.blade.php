@extends('layout')

<link href="/css/card.css" rel="stylesheet">
@section('title')
    Card page
@endsection

@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="info">
                <div class="title0"><h1>{{ $product->name }}</h1></div>
                <div class="row">
                    <div class="product-photo col-6">
                        @foreach($photos as $ph)
                            @if($ph->name=='second')
{{--                                <p>{{ $ph->way }}</p>--}}
                                <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                            @endif
                        @endforeach

                        <div class="slider">
                            <hr>
                            <hr>
                            <hr>
                        </div>
                    </div>
                    <div class="text-info col-6">
                        <h1 class="title">{{ $product->name }}</h1>

                        <div class="category">
                            <div class="women">
                                <h3>women</h3>
                                <div class="rectangle"><span>{{ $product->women }}</span>%</div>
                            </div>
                            <div class="men"><h3>men</h3>
                                <div class="rectangle"><span>{{ $product->men }}</span>%</div>
                            </div>
                        </div>
                        <div class="price">
                            <h3>Ціна:</h3>
                            <h2><span>{{ $product->price }}</span>грн</h2>
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
                <h3>{{ $product->description }}</h3>
            </div>
            <div><a href="{{route("exampleOrders",$product->id)}}">Подивитися до яких замовлень було додано цей товар</a></div>
            <div class="photo">
                @foreach($photos as $ph)
                <div class="row">
                    <div class="image-row1 col-6">
                            @if($ph->name=='third')
                                <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                            @endif
                    </div>
                    <div class="image-row2 col-6">
                        @if($ph->name=='fourth')
                            <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                        @endif
                    </div>
                </div>
                <div class="im">
                    @if($ph->name=='fifth')
                        <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                    @endif
                </div>
                @endforeach
            </div>
{{--            <div class="other">--}}
{{--                <div class="other-lines">--}}
{{--                    <hr>--}}
{{--                    <h2>Інші пропозиції</h2>--}}
{{--                    <hr>--}}
{{--                </div>--}}
{{--                <div class="offers row">--}}
{{--                    <div class="product1 col-4">--}}
{{--                        <div class="product-photo">--}}
{{--                            <img class="image" src="img/card/box1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="product-info">--}}
{{--                            <a>Orange sea</a>--}}
{{--                            <h4>950грн</h4>--}}
{{--                        </div>--}}
{{--                        <button>Купити</button>--}}
{{--                    </div>--}}
{{--                    <div class="product2 col-4">--}}
{{--                        <div class="product-photo">--}}
{{--                            <img class="image" src="img/card/box2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="product-info">--}}
{{--                            <a>Pear black currant</a>--}}
{{--                            <h4>899грн</h4>--}}
{{--                        </div>--}}
{{--                        <button>Купити</button>--}}
{{--                    </div>--}}
{{--                    <div class="product3 col-4">--}}
{{--                        <div class="product-photo">--}}
{{--                            <img class="image" src="img/card/box3.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="product-info">--}}
{{--                            <a>Rhubarb lily of the valley</a>--}}
{{--                            <h4>899грн</h4>--}}
{{--                        </div>--}}
{{--                        <button>Купити</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        </div>
    </main>
@endsection
