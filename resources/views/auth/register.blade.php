@extends('layouts.Front-end.auth')

@section('body')

<body>
    <div class="container">
        <div class="header center">
            <img class="logo" src="images/logo.png" alt="">
            <div class="sign-in-cta center">
                <h2 class="title">إنشاء حسابك الخاص</h2>
                <p>هل لديك حساب لدينا؟ <a href="{{ route('login') }}">تسجيل الدخول</a></p>
            </div>
        </div>
        <div class="sign-container">
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">البريد الإلكتروني</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">كلمة السر</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="first-name" type="text" class="validate">
                    <label for="first-name">الاسم الأول</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="last-name" type="text" class="validate">
                    <label for="last-name">اسم العائلة</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <a class="waves-effect waves-light btn">إنشاء حساب</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
@endsection
