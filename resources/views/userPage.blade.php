@extends('layouts/app')
<link href="/css/bootstrap-grid.min.css" rel="stylesheet">

<link rel="stylesheet" href="/css/general.css">
<link rel="stylesheet" href="/css/auth.css">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Ви увійшли до особистого кабінету</h2>
            <div class="box">
                <p>Користувач: <span>{{$user->name}}</span></p>
                <p>Електронна пошта: <span>{{$user->email}}</span></p>
                <div class="go-orders"><a
                        href="{{route('myOrders',$user->id)}}">{{ __('Переглянути усі мої замовлення') }}</a>
                    <hr>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{ __('') }}
            </div>
        </div>
    </div>
@endsection
