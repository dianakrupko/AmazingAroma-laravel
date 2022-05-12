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
                        <button><a href="catalog.html">Перейти до каталогу</a></button>
                        <div class="photo2"><img class="image" src="img/index/photo2.png" alt="photo2"></div>
                    </div>
                    <div class="photo1"><img class="image" src="img/index/photo1.png" alt="photo1"></div>
                </div>

            </div>
            <div class="catalog">
                <div class="catalog-row">
                    <div class="product">
                        <img src="img/index/image5.png" class="image" alt="5">
                        <div class="product-info">
                            <a class="name1">A pineapple birch</a>
                            <h4 class="price1">850грн</h4>
                        </div>
                    </div>
                    <div class="product">
                        <img src="img/index/image11.png" class="image" alt="11">
                        <div class="product-info">
                            <a class="name11">Osmanthus indian turbberose</a>
                            <h4 class="price11">950грн</h4>
                        </div>
                    </div>
                    <div class="im"><img src="img/index/im1.png" class="image" alt="im"></div>
                </div>
                <div class="catalog-row">
                    <div class="im"><img src="img/index/im2.png" class="image" alt="im"></div>
                    <div class="product">
                        <img src="img/index/image16.png" class="image" alt="16">
                        <div class="product-info">
                            <a class="name3">Tachas leaf vanilla</a>
                            <h4 class="price3">799грн</h4>
                        </div>
                    </div>
                    <div class="product">
                        <img src="img/index/image10.png" class="image" alt="10">
                        <div class="product-info">
                            <a class="name4">Orange sea</a>
                            <h4 class="price4">950грн</h4>
                        </div>
                    </div>
                </div>
                <div class="go-to-catalog">
                    <div class="go-to-catalog-line">
                        <a href="catalog.html">Перейти до каталогу</a>
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
                    <p>Більше інформації</p>
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
                        <a href="catalog.html">Придбати сертифікат</a>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="online-consultation">
                @if($errors->any())
                    <div class="box-error">
                            @foreach($errors->all() as $error)
                                <p class="text-error">{{ $error }}</p>
                            @endforeach
                    </div>
                @endif
                <form class="box" action="home/check_consultation" method="post">
                    @csrf
                    <h1>Онлайн-консультація з парфумером</h1>
                    <div class="answer">
                        <label><input type="tel" name="phone" id="phone"
                                      placeholder="Залиште тут номер телефону..."></label>
                        <button type="submit" class="call">
                            <i class="icon-call"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
