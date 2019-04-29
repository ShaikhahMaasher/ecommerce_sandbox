
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/user-sign-style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/rtl.css') }}" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Signin | Qounaa </title>
</head>

    @yield('body')

</html>