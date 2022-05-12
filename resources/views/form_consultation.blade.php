@extends('layout')

<link href="/css/index.css" rel="stylesheet">
@section('title')
    Main page
@endsection
<style>
    .box-error{
        padding-top: 2vh;
        display: block;
    }
    .formWithError{
        padding: 10vh 0;
        display: flex;
        flex-direction: column;
    }
    .text-error{
        color: #dc3545;
    }
</style>
@section('main_content')
    <main>
        <div class="online-consultation">
            <div class="formWithError">
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
                @if($errors->any())
                    <div class="box-error">
                        @foreach($errors->all() as $error)
                            <p class="text-error">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
