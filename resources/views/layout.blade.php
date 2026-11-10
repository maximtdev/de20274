<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}">
</head>
<body>

<header>
    <div class="logo">
        <img alt="Логотип" src="{{ asset('assets/images/logo.png') }}">
        <span>Чудо Обувь</span>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Главная</a></li>
            <li><a href="{{ route('product.index') }}">Товары</a></li>
            <li><a style="cursor: pointer;" onclick="history.back()">Назад</a></li>
        </ul>
    </nav>

    <div class="auth">
       @auth
            {{ Auth::user()->surname }} {{ Auth::user()->name }} {{ Auth::user()->patronymic }}
            <form method="POST" action="/logout" style="display: inline-block" >
                @csrf
                <button type="submit">Выйти</button>
            </form>
        @else
           <form method="POST" action="/login" >
               <button type="submit">Войти</button>
           </form>
       @endauth
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>

</footer>

</body>
</html>
