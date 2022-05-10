@extends('layout')
<link href="/css/about.css" rel="stylesheet">
@section('title')
    About page
@endsection
@section('main_content')
    <main id="content">
        <div class="container">
            <div class="back">
                <a href="#"><i class="icon-arrow-left"></i>Назад</a>
            </div>
            <div class="name-page">
                <hr>
                <h1>Про нас</h1>
                <hr>
            </div>
            <div class="about-us-information">
                <ul class="list">
                    <li><span>Amazing Aroma - це укрїнаська компанія по виготовленню найкращих парфумів з неповторними
                    ароматами.</span>
                    </li>
                    <li><span>У нас є власний парфумер, який допоможе підібрати індивідуальний аромат для Вас.</span></li>
                    <li><span>Selective for all. Це той момент, коли якість продукції значно перевищує її вартість. І ми пишаємося
                    цим, тому що будь-яка людина зможе дозволити собі якісний, стійкий аромат.</span>
                    </li>
                    <li><span>Постійний розвиток. Ми не стоїмо на місці і постійно намагаємось покращувати існуючі аромати,
                    вигадувати нові, підвищувати стійкість ароматів, знаходити нові комбінації запахів.</span>
                    </li>
                </ul>
            </div>
            <div class="logo-line">
                <div class="image-logo">
                    <img class="image" src="/img/about/AA.png" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection

