
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> {{ __('Admin Area') }} | {{ __('E-Commerce Sandbox') }} </title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

        <!-- Scripts -->
        <!-- Can use it with defer to load it later -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

        @yield('head')
    </head>

    @yield('body')

</html>