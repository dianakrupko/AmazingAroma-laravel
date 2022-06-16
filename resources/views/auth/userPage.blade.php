@extends('layout')
<link rel="stylesheet" href="/css/auth.css">
@section('main_content')
    <div class="container">
        <h3>Особистий кабінет</h3>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{ __('') }}
        </div>

        <div class="accordion">
            <input class="accordion__input" type="radio" id="data" name="accordion" checked/>
            <div class="accordion__item" id="data-content">

                <div class="auth-info row">

                    <div class="col-5">
                        <p>Користувач: <span>{{$user->name}}</span></p>
                        <p>Електронна пошта: <span>{{$user->email}}</span></p>
                        <p>Зареєстровано: <span>{{$user->created_at}}</span></p>
                    </div>
                    <div class="info-ph col-7">
                        <img class="auth-photo" src="/img/auth-photo.png" alt="">
                        <div class="with-button"><button class="button-photo">Завантажити фото</button></div>
                    </div>
                </div>
            </div>
            <label for="data" id="data-button" class="accordion__button">Контактна інформація</label>
            <input class="accordion__input" type="radio" id="favorite" name="accordion"/>
            <div class="accordion__item" id="favorite-content">
                <div class="products">
                    {{--                @if(!is_null($favorite->products))--}}
                    @if($favorite!=null)
                        @foreach($favorite->products as $product)
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
                                    <div class="name-product">
                                        <a href="{{route('product',$product->id)}}">{{$product->name}}</a>
                                    </div>
                                    <p>{{$product->price}}грн</p>
                                    <div class="product-button">
                                        <form action="{{route('basketAdd',$product->id)}}" method="POST">
                                            @csrf
                                            <button type="submit">В корзину</button>
                                        </form>
                                        <form action="{{route('favoriteRemove',$product->id)}}" method="POST">
                                            @csrf
                                            <button>Видалити</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @component('errors')
                            Ви ще не додали товари до вподобаних...
                        @endcomponent
                    @endif
                </div>
            </div>
            <label for="favorite" id="favorite-button" class="accordion__button">Вподобані товари</label>


            <input class="accordion__input" type="radio" id="orders" name="accordion"/>
            <div class="accordion__item" id="orders-content">
                <div class="container">
                    <div class="about-us-information">
                        @if(sizeof($orders)!=NULL)
                            @foreach($orders as $order)
                                @if($order->done)
                                    <ul class="list">
                                        <li>Номер: <span>{{$order->id}}</span></li>
                                        <li>Сума замовленя: <span>{{$order->getTotalPrice()}}грн</span></li>
                                        <li>Дата і час оформлення: <span>{{$order->updated_at}}</span></li>
                                        <li>
                                            <a href="{{route('orderDetail',$order->id)}}" class="link-order-detail">Подивитися
                                                деталі</a>
                                            <hr>
                                        </li>
                                    </ul>
                                @endif
                            @endforeach
                        @else
                            <div>Ви ще не оформили жодного замовлення...</div>
                            <div class="link-catalog"><a href="{{ route('catalog',3) }}">Перейти до покупок</a>
                                <hr>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <label for="orders" id="orders-button" class="accordion__button">Мої замовлення</label>
            <label><a class="accordion__button" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                    <p>Вихід
                        <img src="/img/logout-line.svg" alt=""></p>

                </a>
            </label>
        </div>
    </div>

@endsection
