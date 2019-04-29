@extends('layouts.Front-end.auth')


@section('body')

<body>
    <div class="container">
        <div class="header center">
            <img class="logo" src="images/logo.png" alt="">
            <div class="sign-in-cta center">
               <p class="welcome">نرحب بعودتك إلينا!</p>
                <h2 class="title">تسجيل الدخول إلى حسابك</h2>
                <p>ليس لديك حساب؟ <a href="{{ route('register') }}">الإشتراك</a></p>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="sign-container">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">البريد الإلكتروني</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <label for="password">كلمة السر</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <a class="forgot-password" href="">هل نسيت كلمة السر؟</a>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="waves-effect waves-light btn">تسجيل الدخول</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
</body>
@endsection
