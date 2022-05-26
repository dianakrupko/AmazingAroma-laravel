<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/css/icons.css" rel="stylesheet">
    <link href="/css/general.css" rel="stylesheet">
    <script src="/js/menu.js"></script>
    <title> @yield ('title') </title>
</head>
<body>
<header>
    <div class="header-container container">
        <div class="component-left">
            <a href="{{route('home')}}"><img src="/img/logo.svg" alt="logo"></a>
            <nav class="header-menu menu">

                <ul class="menu-list">
                    <li class="menu-item">
                        <a href="{{route('home')}}" class="menu-link">Головна</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('catalog')}}" class="menu-link">Каталог</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('about')}}" class="menu-link">Про нас</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="component-right">

            <div><a class="number-phone" href="tel:+380 97 133 76 71">+380 97 133 76 71</a></div>
            <div class="like-basket">
                <div><a href={{route('favorite')}}><i class="icon-like"></i></a></div>
                <div><a href="{{route('basket')}}"><i class="icon-basket"></i></a></div>
                <div><a href={{ route('auth',1) }}><img class="person" src="img/icons_person.svg"></a></div>
                <div id="sidebar" class="func">
                    <div class="toggle-btn" onclick="openMenu()">
                        <i class="icon-menu"></i>
                    </div>
                    <div class="box-menu">
                        <div class="name-menu">
                            <img class="close" onclick="closeMenu()" src="img/index/close.svg" alt="close">
                        </div>

                        <ul>
                            <li>Меню сайту</li>
                            <hr>
                            <li><a href="{{route('home')}}">Головна</a></li>
                            <li><a href="{{route('catalog')}}l">Каталог</a></li>
                            <li><a href="{{route('about')}}">Про нас</a></li>
                            <li><a href="{{route('basket')}}">Корзина</a></li>
                            <li><a href="{{route('favorite')}}">Вподобані</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('main_content')

<footer>
    <div class="container">
        <div class="name-footer">
            <h2>Amazing Aroma</h2>
        </div>
        <div>
            <div class="footer-info row">
                <nav class="col-3 col-sm-2">
                    <a href="{{route('home')}}">Головна</a>
                    <a href="{{route('catalog')}}l">Каталог</a>
                    <a href="{{route('about')}}">Про нас</a>
                </nav>
                <div class="like-cart col-3 col-sm-2">
                    <a href="{{route('favorite')}}">Вподобані</a>
                    <a href="{{route('basket')}}">Корзина</a>
                </div>
                <div class="data col-6 col-sm-4">
                    <a href="mailto:amazin.aroma@gmail.com">amazin.aroma@gmail.com</a>
                    <a href="tel:+380 97 13 372 11" class="">+380971337671</a>
                    <a>Київ, вул. Хрещатик, 22</a>
                </div>
                <div class="e-mail col-6 col-md-4">
                    <span class="mail"><a>Підпишіться на наші новини</a></span>
                    <form class="email-form" action="#" method="post">
                        <label><input type="email" name="email"
                                      placeholder="Ведіть ваш e-mail..."></label>
                    </form>
                    <div class="contact">
                        <a class="icon-facebook" target="_blank" href="https://www.facebook.com/"></a>
                        <a class="icon-instagram" target="_blank" href="https://www.instagram.com/amazing.aroma/"></a>
                        <a class="icon-telegram" target="_blank" href="https://web.telegram.org/z/"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
