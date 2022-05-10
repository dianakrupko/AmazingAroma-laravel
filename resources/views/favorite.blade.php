@extends('layout')

<link href="/css/favorite.css" rel="stylesheet">
@section('title')
    Favorite page
@endsection

@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="name-page">
                <hr>
                <h1>Вподобані</h1>
                <hr>
            </div>
            <div class="products">
                <div class="product">
                    <div class="product-photo">
                        <img class="image" src="img/favorite/image1.png" alt="">
                    </div>
                    <div class="product-information">
                        <div class="name-product">
                            <a href="card.html">Ambroxan</a>
                        </div>
                        <p>850грн</p>
                        <div class="product-button">
                            <button>В корзину</button>
                            <button>Видалити</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-photo">
                        <img class="image" src="img/favorite/image2.png" alt="">
                    </div>
                    <div class="product-information">
                        <div class="name-product">
                            <a href="card.html">Passion fruit music</a>
                        </div>
                        <p>750грн</p>
                        <div class="product-button">
                            <button>В корзину</button>
                            <button>Видалити</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-photo">
                        <img class="image" src="img/favorite/image3.png" alt="">
                    </div>
                    <div class="product-information">
                        <div class="name-product">
                            <a href="card.html">Rhubarb lily of the valley</a>
                        </div>
                        <p>750грн</p>
                        <div class="product-button">
                            <button>В корзину</button>
                            <button>Видалити</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
