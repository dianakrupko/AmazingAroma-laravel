@extends('layout')

<link href="/css/basket.css" rel="stylesheet">
@section('title')
    Basket page
@endsection

@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="name-page">
                <hr>
                <h1>Корзина</h1>
                <hr>
            </div>
            <div class="products">
                <div class="product">
                    <div class="product-photo">
                        <img class="image" src="img/basket/image1.png" alt="">
                    </div>
                    <div class="description">
                        <a href="card.html">The rose plum</a>
                        <div class="number">
                            <span>-</span>
                            <div class="square">1</div>
                            <span>+</span>
                        </div>
                        <h4>850грн</h4>
                        <button class="remove">Видалити</button>
                        <div class="delete"><img src="img/basket/delete.svg" alt="delete"></div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-photo">
                        <img class="image" src="img/basket/image2.png" alt="">
                    </div>
                    <div class="description">
                        <a href="card.html">Cocoa vanilla</a>
                        <div class="number">
                            <span>-</span>
                            <div class="square">1</div>
                            <span>+</span>
                        </div>
                        <h4>950грн</h4>
                        <div class="delete"><img src="img/basket/delete.svg" alt="delete"></div>
                        <button class="remove">Видалити</button>
                    </div>
                </div>
            </div>
            <div class="total-price">
                <div class="total-price-line">
                    <hr>
                </div>
                <div class="total-price-row">
                    <p>Всього:</p>
                    <span>1800 грн</span>
                </div>
            </div>
            <div class="ordering">
                <form action="#" method="post" enctype="multipart/form-data"></form>
                <div class="ordering-data">
                    <h2>Дані для оформлення замовлення</h2>
                    <label>
                        <input type="text" name="name" placeholder="ПІБ">
                    </label>
                    <label>
                        <input type="tel" name="phone" placeholder="Номер телефону">
                    </label>
                </div>
                <div class="delivery">
                    <h2>Доставка</h2>
                    <label class="radio">
                        <p><input checked type="radio" name="delivery">Нова пошта (відділення)</p>
                        <p><input type="radio" name="delivery">Нова пошта (кур'єр)</p>
                    </label>
                    <div class="city-department">
                        <label>
                            <input type="text" name="city" placeholder="Місто">
                        </label>
                        <label>
                            <input type="text" name="number-department" placeholder="Номер відділення">
                        </label>
                    </div>

                </div>
                <div class="payment">
                    <h2>Оплата</h2>
                    <label class="radio">
                        <p><input checked type="radio" name="payment">Оплата після отримання</p>
                        <p><input type="radio" name="payment">Оплата онлайн</p>
                    </label>
                </div>
                <div class="ordering-button">
                    <button>Оформити замовлення</button>
                </div>
            </div>
        </div>
    </main>
@endsection
