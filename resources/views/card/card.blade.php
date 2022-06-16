@extends('layout')

<link href="/css/card.css" rel="stylesheet">
@section('title')
    Card page
@endsection

@section('main_content')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = new ChiefSliderMin('.slider', {
                loop: true,
                autoplay: true,
                interval: 7000,
            });
        });
    </script>
    <main>
        <div class="container">
            <div class="back">
                <button onclick="history.back()"><a><i class="icon-arrow-left"></i>Назад</a></button>
            </div>

            <div class="info">
                <div class="title0"><h1>{{ $product->name }}</h1></div>
                <div class="row">
                    <div class="product-photo col-6">
                        @if($product->certificate)
                            <div class="ph-first-cert">
                                @foreach($photos as $ph)
                                    @if($ph->name=='second')
                                        <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                                    @endif
                                @endforeach
                            </div>
                        @elseif(!$product->certificate)
                            <div class="ph-first">
                                @foreach($photos as $ph)
                                    @if($ph->name=='second')
                                        <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                                    @endif
                                @endforeach
                            </div>
                            <div class="slider">
                                <div class="slider__wrapper">
                                    <div class="slider__items">
                                        <div class="slider__item">
                                            @foreach($photos as $ph)
                                                @if($ph->name=='second')
                                                    <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="slider__item">
                                            @foreach($photos as $ph)
                                                @if($ph->name=='third')
                                                    <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="slider__item">
                                            @foreach($photos as $ph)
                                                @if($ph->name=='fourth')
                                                    {{--                                <p>{{ $ph->way }}</p>--}}
                                                    <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="slider__item">
                                            @foreach($photos as $ph)
                                                @if($ph->name=='fifth')
                                                    <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <ol class="slider__indicators">
                                    <li data-slide-to="0"></li>
                                    <li data-slide-to="1"></li>
                                    <li data-slide-to="2"></li>
                                    <li data-slide-to="3"></li>
                                </ol>
                            </div>
                        @endif
                    </div>
                    <div class="text-info col-6">
                        <div class="not-cart-like">
                            <h1 class="title">{{ $product->name }}</h1>
                            @if(!$product->certificate)
                                <div class="category">
                                    <div class="women">
                                        <h3>women</h3>
                                        <div class="rectangle"><span>{{ $product->women }}</span>%</div>
                                    </div>
                                    <div class="men"><h3>men</h3>
                                        <div class="rectangle"><span>{{ $product->men }}</span>%</div>
                                    </div>
                                </div>
                            @endif
                            <div class="price">
                                <h3>Ціна:</h3>
                                <h2><span>{{ $product->price }}</span>грн</h2>
                            </div>
                        </div>
                        <div class="cart-like">
                            <form action="{{route('basketAdd',$product->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="buy">Купити</button>
                            </form>
                            <div class="like">
                                @if(sizeof($product->favorites)==null)
                                    <form action="{{route('favoriteAdd',$product->id)}}" method="POST">
                                        @csrf
                                        <button class="like-add" type="submit">
                                            <img src="/img/icon-like0.svg" alt="">
                                        </button>
                                    </form>
                                @elseif(sizeof($product->favorites)!=null)
                                    <form class="like-del" action="{{route('deleteProduct',$product->id)}}"
                                          method="POST">
                                        @csrf
                                        <button class="" type="submit">
                                            <img src="/img/icon-like.svg" alt="">
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if(!$product->certificate)
                    <div class="description">
                        <h2>Аромат:</h2>
                        <h3>{{ $product->description }}</h3>
                    </div>
                    <div class="ph">
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
                @endif
                @if($product->certificate)
                    <div class="certificate">
                        <div class="certificate-row2">
                            <ul class="list">
                                <li><span>Сертифікат можна використовувати протягом року.</span></li>
                                <li><span>Діє на нові колекції.</span></li>
                                <li><span>Якщо після покупки парфумів гроші ще залишилися, вони автоматично перераховуються на карту
                        покупця.</span>
                                </li>
                            </ul>
                            <div class="certificate-image">
                                <img class="image" src="/img/index/gift2.png" alt="gift1">
                            </div>
                        </div>
                        <div class="go-to-certificate">
                            <div class="go-to-certificate-line">
                                <a href="{{ route('certificate') }}">{{ __('Інші сертифікати') }}</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            @if(!$product->certificate)
                <div class="other">
                    <div class="other-lines">
                        <hr>
                        <h2>Інші пропозиції</h2>
                        <hr>
                    </div>
                    <div class="offers row">
                        @for($i=0;$i<3;$i++)
                            @include('card/product_area', ['product'=>$products[$i]])
                        @endfor
                    </div>
                </div>
        @endif
    </main>
    <script>
        function addedProduct() {
            document.getElementById("sidebar").classList.toggle('active');
        }

        function deleteProduct() {
            document.getElementById("sidebar").classList.toggle('active');
        }
    </script>
@endsection
