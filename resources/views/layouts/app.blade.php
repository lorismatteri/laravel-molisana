<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | Molisana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600,800,900" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <header>
            <div class="logo">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="{{route('home')}}" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">HOME</a></li>
                    <li><a href="{{route('products')}}" class="{{Route::currentRouteName() === 'products' ? 'active' : ''}}">PRODOTTI</a></li>
                    <li><a href="{{route('contacts')}}" class="{{Route::currentRouteName() === 'contacts' ? 'active' : ''}}">CONTATTI</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')
    </body>
</html>