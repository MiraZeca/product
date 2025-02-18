<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>@yield('title')</title>
</head>

<body>

    @if (Route::currentRouteName() == 'home')
        @include('navbar')
    @elseif (Route::currentRouteName() == 'admin')
        @include('navbar2')
    @elseif (Route::currentRouteName() == 'users.index')
        @include('navbar2')
    @elseif (Route::currentRouteName() == 'product.create')
        @include('navbar2')
    @elseif (Route::currentRouteName() == 'categories.create')
        @include('navbar2')
    @elseif (Route::currentRouteName() == 'user')
        @include('navbar1')
    @else
        @include('navbar')
    @endif


    @yield('main')


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    @include('flash-message')

    @include('footer')
</body>

</html>
