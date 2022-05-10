@extends('layout')

<link href="/css/catalog.css" rel="stylesheet">
@section('title')
    Catalog page
@endsection
@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="name-page">
                <hr>
                <h1>Каталог</h1>
                <hr>
            </div>
            <div class="settings">
                <div class="filter">
                    <a><i class="icon-filter"></i><span>Фільтр</span></a>
                </div>
                <div class="order-price">
                    <label>
                        <select name="order-price">
                            <option value="ascending">Ціна за зростанням</option>
                            <option selected value="descending">Ціна за спаданням</option>
                        </select>
                        <!--                <i class="icon-arrow-down"></i>-->
                    </label>
                </div>
            </div>
            <div class="catalog-box row">
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod1.png" alt="">
                    <div class="product-info">
                        <a href="card.html">Orange sea</a>
                        <h4>950грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod2.png" alt="">
                    <div class="product-info">
                        <a>Pear black currant</a>
                        <h4>899грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod3.png" alt="">
                    <div class="product-info">
                        <a>Rhubarb lily of the valley</a>
                        <h4>899грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod4.png" alt="">
                    <div class="product-info">
                        <a>Passion fruit musk</a>
                        <h4>899грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod5.png" alt="">
                    <div class="product-info">
                        <a>Cocoa vanilla</a>
                        <h4>899грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod6.png" alt="">
                    <div class="product-info">
                        <a>Lychee peony</a>
                        <h4>899грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod7.png" alt="">
                    <div class="product-info">
                        <a>Wood amber spruce resin</a>
                        <h4>899грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod8.png" alt="">
                    <div class="product-info">
                        <a>Osmanthus indian turbberose</a>
                        <h4>899грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
                <div class="product col-6 col-md-4">
                    <img class="image" src="img/catalog/prod9.png" alt="">
                    <div class="product-info">
                        <a>Tachac leaf vanilla</a>
                        <h4>799грн</h4>
                    </div>
                    <button>Купити</button>
                </div>
            </div>
            <div class="more">
                <button><i class="icon-more"></i><span>Більше</span></button>
            </div>
        </div>
    </main>
@endsection
