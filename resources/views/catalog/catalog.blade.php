@extends('layout')

<link href="/css/catalog.css" rel="stylesheet">
@section('title')
    Catalog page
@endsection
@section('main_content')
    <main>
        <div class="container">
            <div class="back">
                <button onclick="history.back()"><a><i class="icon-arrow-left"></i>Назад</a></button>
            </div>
            <div class="name-page">
                <hr>
                <h1>Каталог</h1>
                <hr>
            </div>
            <div class="catalog-box row">
                @for($i=0;$i<$count;$i++)
                    @include('catalog/product_area', ['product'=>$products[$i]])
                @endfor
                <div class="more">
                    <a href="{{route('catalog', $count+=3)}}">
                        <button><i class="icon-more"></i><span>Більше</span></button>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
