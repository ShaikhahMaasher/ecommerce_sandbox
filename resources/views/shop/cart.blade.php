@extends('layouts.Front-end.master')

@section('body')

<body>
    @if (Route::has('login'))
        @auth
        <div class="site-header">
            <!--  Main Menu Navbar  -->
            <nav class="main-menu">
                <div class="nav-wrapper signed-in valign-wrapper">
                    <a href="#" data-target="mobile-view" class="sidenav-trigger mobile-nav"><i class="material-icons black-text">menu</i></a>
                    <a href="{{ route('homepage') }}" class="brand-logo right"><img src="{{ asset('images/logo.png') }}" alt="qonaa"></a>
                    <form class="search center-block">
                        <div class="input-field">
                            <i id="search-back" class="fa fa-long-arrow-right" style="display: none"></i>
                            <input id="search" type="search" placeholder="ما الذي تبحث عنه؟" required>
                            <label class="label-icon" for="search"><i id="search-icon" class="material-icons">search</i></label>
                        </div>
                    </form>
                    <ul>
                        <div class="nav-wrapper no-padding">
                            <ul class="account-wrapper left">
                                <li class="account-box">
                                    <a class="account-dropdown hide-on-small-only" href="#!" data-target="account-dropdown">
                                        <span class="user-name">مرحباً شيخة</span>
                                        <span>حسابي</span>
                                        <i class="material-icons left">arrow_drop_down</i>
                                    </a>
                                </li>
                                <li class="wishlist-container hide-on-small-only">
                                    <a href="{{ route('cart')}}">
                                        <span class="material-icons wishlist">favorite</span>
                                        <span class="badge red">2</span>
                                    </a>
                                </li>
                                <li class="cart-container">
                                    <a href="{{ route('cart')}}">
                                        <span class="material-icons cart">shopping_cart</span>
                                        <span class="badge red">2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>

                <!-- Account Dropdown -->
                <ul id="account-dropdown" class="dropdown-content">
                    <li class="user-links">
                        <a href=""><span>الطلبيات</span><i class="material-icons">assignment</i></a>
                        <a href=""><span>العناوين</span><i class="material-icons">assignment</i></a>
                        <a href=""><span>عمليات الدفع</span><i class="material-icons">assignment</i></a>
                        <a href=""><span>رصيدك بقنة</span><i class="material-icons">assignment</i></a>
                        <a href=""><span>الإرجاع</span><i class="material-icons">assignment</i></a>
                        <a href=""><span>الملف الشخصي</span><i class="material-icons">assignment</i></a>
                    </li>
                    <li class="divider"></li>
                    <li class="sign-out-cta">
                        <a class="center grey-text" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('تسجيل الخروج') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>

                <ul class="sidenav" id="mobile-view">
                    <li>
                        <div class="user-view">
                            <span class="material-icons black-text sidenav-close">clear</span>
                            <div class="brand-logo">
                                <a href="{{ route('homepage') }}" class="right"><img src="{{ asset('images/logo.png') }}" alt="qonaa"></a>
                            </div>
                            <div class="account">
                                <p class="title">مرحباً بكـ في قنة!</p>
                            </div>
                        </div>
                        <div id="mobile-main-menu">
                            <ul>
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                        <span>الرئيسية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signin.html">
                                        <i class="fa fa-user"></i>
                                        <span>الحساب</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html">
                                        <span class="badge red">2</span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>عربة التسوق</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="badge red">2</span>
                                        <i class="fa fa-heart"></i>
                                        <span>قائمتي المفضلة</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="menu-divider">
                        <div class="divider"></div>
                    </li>
                    <li><a class="subheader">جميع الفئات</a></li>
                    <li>
                        <ul class="collapsible collapsible-accordion no-padding">
                            <li>
                                <a class="collapsible-header">الأزياء<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#">الأزياء النسائية</a></li>
                                        <li><a href="#">الأحذية</a></li>
                                        <li><a href="#">أزياء رجالية</a></li>
                                        <li><a href="#">الساعات</a></li>
                                        <li><a href="#">إكسسوارات الأزياء</a></li>
                                        <li><a href="#">النظارات</a></li>
                                        <li><a href="#">حقائب يد للنساء</a></li>
                                        <li><a href="#">أزياء البنات</a></li>
                                        <li><a href="#">أزياء الأولاد</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header">الإلكترونيات<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class=""><a href="#" class="">أجهزة الكمبيوتر المحمولة</a></li>
                                        <li class=""><a href="#" class="">ألعاب الفيديو</a></li>
                                        <li class=""><a href="#" class="">التلفزيونات</a></li>
                                        <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                        <li class=""><a href="#" class="">سماعات</a></li>
                                        <li class=""><a href="#" class="">سماعات الرأس و سماعات الأذن</a></li>
                                        <li class=""><a href="#" class="">أجهزة الصوت/الفيديو</a></li>
                                        <li class=""><a href="#" class="">الساعات الذكية والإكسسوارات</a></li>
                                        <li class=""><a href="#" class="">كاميرات وتصوير وفيديو</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header">الموبايلات<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class=""><a href="{{ route('product.index') }}" class="">الموبايلات</a></li>
                                        <li class=""><a href="#" class="">أجهزة التابلت</a></li>
                                        <li class=""><a href="#" class="">الساعات الذكية</a></li>
                                        <li class=""><a href="#" class="">بور بانك</a></li>
                                        <li class=""><a href="#" class="">سماعات الموبايل</a></li>
                                        <li class=""><a href="#" class="">كابلات الشحن</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header">المنزل والمطبخ<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class=""><a href="#" class="">مستلزمات السرير</a></li>
                                        <li class=""><a href="#" class="">الحمامات</a></li>
                                        <li class=""><a href="#" class="">ديكورات المنازل</a></li>
                                        <li class=""><a href="#" class="">مطبخ وأدوات طعام</a></li>
                                        <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                        <li class=""><a href="#" class="">الأدوات وتحسين المنزل</a></li>
                                        <li class=""><a href="#" class="">الأثاث</a></li>
                                        <li class=""><a href="#" class="">تخزين وتنظيم منزلي</a></li>
                                        <li class=""><a href="#" class="">مستلزمات الحيوانات الأليفة</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#!">الجمال والعطور</a></li>
                            <li><a class="red-text" href="#!">عروض</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Categories Menu -->
            <nav class="second-menu hide-on-med-and-down">
                <div class="nav-wrapper valign-wrapper">
                    <ul>
                        <li><a class="red-text" href="#!">عروض</a></li>
                        <li><a href="#!">الجمال والعطور</a></li>
                        <li class="mega-menu">
                            <a class="home-and-kitchen-dropdown" href="#!" data-target="home-and-kitchen-dropdown">المنزل
                                والمطبخ</a>
                            <div id="home-and-kitchen-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="#" class="">مستلزمات السرير</a></li>
                                            <li class=""><a href="#" class="">الحمامات</a></li>
                                            <li class=""><a href="#" class="">ديكورات المنازل</a></li>
                                            <li class=""><a href="#" class="">مطبخ وأدوات طعام</a></li>
                                            <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                            <li class=""><a href="#" class="">الأدوات وتحسين المنزل</a></li>
                                            <li class=""><a href="#" class="">الأثاث</a></li>
                                            <li class=""><a href="#" class="">تخزين وتنظيم منزلي</a></li>
                                            <li class=""><a href="#" class="">مستلزمات الحيوانات الأليفة</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-home-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-home-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-home-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="mega-menu">
                            <a class="mobiles-dropdown" href="#!" data-target="mobiles-dropdown">الموبايلات</a>
                            <div id="mobiles-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="{{ route('product.index') }}" class="">الموبايلات</a></li>
                                            <li class=""><a href="#" class="">أجهزة التابلت</a></li>
                                            <li class=""><a href="#" class="">الساعات الذكية</a></li>
                                            <li class=""><a href="#" class="">بور بانك</a></li>
                                            <li class=""><a href="#" class="">سماعات الموبايل</a></li>
                                            <li class=""><a href="#" class="">كابلات الشحن</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="mega-menu">
                            <a class="elctronic-dropdown" href="#!" data-target="elctronic-dropdown">الإلكترونيات</a>
                            <div id="elctronic-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="#" class="">أجهزة الكمبيوتر المحمولة</a></li>
                                            <li class=""><a href="#" class="">ألعاب الفيديو</a></li>
                                            <li class=""><a href="#" class="">التلفزيونات</a></li>
                                            <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                            <li class=""><a href="#" class="">سماعات</a></li>
                                            <li class=""><a href="#" class="">سماعات الرأس و سماعات الأذن</a></li>
                                            <li class=""><a href="#" class="">أجهزة الصوت/الفيديو</a></li>
                                            <li class=""><a href="#" class="">الساعات الذكية والإكسسوارات</a></li>
                                            <li class=""><a href="#" class="">كاميرات وتصوير وفيديو</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="mega-menu">
                            <a class="fashion-dropdown" href="#!" data-target="fashion-dropdown">الأزياء</a>
                            <div id="fashion-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="#" class="">الأزياء النسائية</a></li>
                                            <li class=""><a href="#" class="">الأحذية</a></li>
                                            <li class=""><a href="#" class="">أزياء رجالية</a></li>
                                            <li class=""><a href="#" class="">الساعات</a></li>
                                            <li class=""><a href="#" class="">إكسسوارات الأزياء</a></li>
                                            <li class=""><a href="#" class="">النظارات</a></li>
                                            <li class=""><a href="#" class="">حقائب يد للنساء</a></li>
                                            <li class=""><a href="#" class="">أزياء البنات</a></li>
                                            <li class=""><a href="#" class="">أزياء الأولاد</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-fashion-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-fashion-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-beauty-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Categories Menu -->
        </div> <!-- END OF SITE HEADER -->
        @else
        <div class="site-header">
            <!--  Main Menu  -->
            <nav class="main-menu">
                <div class="nav-wrapper valign-wrapper">
                    <a href="#" data-target="mobile-view" class="sidenav-trigger mobile-nav"><i class="material-icons black-text">menu</i></a>
                    <a href="{{ route('homepage') }}" class="brand-logo right"><img src="{{ asset('images/logo.png') }}" alt="qonaa"></a>
                    <form class="search center-block">
                        <div class="input-field">
                            <i id="search-back" class="fa fa-long-arrow-right" style="display: none"></i>
                            <input id="search" type="search" placeholder="ما الذي تبحث عنه؟" required>
                            <label class="label-icon" for="search"><i id="search-icon" class="material-icons">search</i></label>
                        </div>
                    </form>
                    <ul>
                        <div class="nav-wrapper no-padding">
                            <ul class="account-wrapper left">
                                <li class="account-box hide-on-small-only">
                                    <a class="account-dropdown" href="#!" data-target="account-dropdown">تسجيل
                                        الدخول أو الإشتراك<i class="material-icons left">arrow_drop_down</i>
                                    </a>
                                    <ul id="account-dropdown" class="dropdown-content">
                                        <li>
                                            <p class="center grey-text">تسوقت لدينا من قبل؟</p>
                                            <form id="login-form" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="email" type="email" class="validate" name="email" placeholder="البريد الإلكتروني">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="password" type="password" name="password" class="validate" placeholder="كلمة السر"
                                                            style="margin-bottom: 0">
                                                        <a class="forgot-password" href="">هل نسيت كلمة السر؟</a>
                                                    </div>
                                                </div>
                                                <button class="sign-in-cta waves-effect waves-light btn" type="submit">{{ __('تسجيل الدخول') }}</button>
                                            </form>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="sign-up-cta">
                                            <p class="center grey-text">ليس لديك حساب؟
                                                <a class="sign-up-cta" href="{{ route('register') }}">اشترك الآن</a>
                                            </p>

                                        </li>
                                    </ul>
                                </li>
                                <li class="cart-container">
                                    <a href="{{ route('cart')}}">
                                        <span class="material-icons cart">shopping_cart</span>
                                        <span class="badge red">2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>

                <ul id="mobile-view" class="sidenav hide-on-large-only">
                    <li>
                        <div class="user-view">
                            <span class="material-icons black-text sidenav-close">clear</span>
                            <div class="brand-logo">
                                <a href="{{ route('homepage') }}" class="right"><img src="{{ asset('images/logo.png') }}" alt="qonaa"></a>
                            </div>
                            <div class="account">
                                <p class="title">مرحباً بكـ في قنة!</p>
                            </div>
                        </div>
                        <div id="mobile-main-menu">
                            <ul>
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                        <span>الرئيسية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signin.html">
                                        <i class="fa fa-sign-in"></i>
                                        <span>تسجيل الدخول</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html">
                                        <i class="fa fa-user-plus"></i>
                                        <span>اشترك الآن</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cart')}}">
                                        <span class="badge red">2</span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>عربة التسوق</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="menu-divider">
                        <div class="divider"></div>
                    </li>
                    <li><a class="subheader">جميع الفئات</a></li>
                    <li>
                        <ul class="collapsible collapsible-accordion no-padding">
                            <li>
                                <a class="collapsible-header">الأزياء<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#">الأحذية</a></li>
                                        <li><a href="#">أزياء رجالية</a></li>
                                        <li><a href="#">الساعات</a></li>
                                        <li><a href="#">إكسسوارات الأزياء</a></li>
                                        <li><a href="#">النظارات</a></li>
                                        <li><a href="#">حقائب يد للنساء</a></li>
                                        <li><a href="#">أزياء البنات</a></li>
                                        <li><a href="#">أزياء الأولاد</a></li>
                                        <li><a href="#">الأزياء النسائية</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header">الإلكترونيات<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class=""><a href="#" class="">أجهزة الكمبيوتر المحمولة</a></li>
                                        <li class=""><a href="#" class="">ألعاب الفيديو</a></li>
                                        <li class=""><a href="#" class="">التلفزيونات</a></li>
                                        <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                        <li class=""><a href="#" class="">سماعات</a></li>
                                        <li class=""><a href="#" class="">سماعات الرأس و سماعات الأذن</a></li>
                                        <li class=""><a href="#" class="">أجهزة الصوت/الفيديو</a></li>
                                        <li class=""><a href="#" class="">الساعات الذكية والإكسسوارات</a></li>
                                        <li class=""><a href="#" class="">كاميرات وتصوير وفيديو</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header">الموبايلات<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class=""><a href="{{ route('product.index') }}" class="">الموبايلات</a></li>
                                        <li class=""><a href="#" class="">أجهزة التابلت</a></li>
                                        <li class=""><a href="#" class="">الساعات الذكية</a></li>
                                        <li class=""><a href="#" class="">بور بانك</a></li>
                                        <li class=""><a href="#" class="">سماعات الموبايل</a></li>
                                        <li class=""><a href="#" class="">كابلات الشحن</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header">المنزل والمطبخ<i class="material-icons">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class=""><a href="#" class="">مستلزمات السرير</a></li>
                                        <li class=""><a href="#" class="">الحمامات</a></li>
                                        <li class=""><a href="#" class="">ديكورات المنازل</a></li>
                                        <li class=""><a href="#" class="">مطبخ وأدوات طعام</a></li>
                                        <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                        <li class=""><a href="#" class="">الأدوات وتحسين المنزل</a></li>
                                        <li class=""><a href="#" class="">الأثاث</a></li>
                                        <li class=""><a href="#" class="">تخزين وتنظيم منزلي</a></li>
                                        <li class=""><a href="#" class="">مستلزمات الحيوانات الأليفة</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#!">الجمال والعطور</a></li>
                            <li><a class="red-text" href="#!">عروض</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End of Main Menu -->
            <!-- Categories Menu -->
            <nav class="second-menu hide-on-med-and-down">
                <div class="nav-wrapper valign-wrapper">
                    <ul>
                        <li><a class="red-text" href="#!">عروض</a></li>
                        <li><a href="#!">الجمال والعطور</a></li>
                        <li class="mega-menu">
                            <a class="home-and-kitchen-dropdown" href="#!" data-target="home-and-kitchen-dropdown">المنزل
                                والمطبخ</a>
                            <div id="home-and-kitchen-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="#" class="">مستلزمات السرير</a></li>
                                            <li class=""><a href="#" class="">الحمامات</a></li>
                                            <li class=""><a href="#" class="">ديكورات المنازل</a></li>
                                            <li class=""><a href="#" class="">مطبخ وأدوات طعام</a></li>
                                            <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                            <li class=""><a href="#" class="">الأدوات وتحسين المنزل</a></li>
                                            <li class=""><a href="#" class="">الأثاث</a></li>
                                            <li class=""><a href="#" class="">تخزين وتنظيم منزلي</a></li>
                                            <li class=""><a href="#" class="">مستلزمات الحيوانات الأليفة</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-home-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-home-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-home-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="mega-menu">
                            <a class="mobiles-dropdown" href="#!" data-target="mobiles-dropdown">الموبايلات</a>
                            <div id="mobiles-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="{{ route('product.index') }}" class="">الموبايلات</a></li>
                                            <li class=""><a href="#" class="">أجهزة التابلت</a></li>
                                            <li class=""><a href="#" class="">الساعات الذكية</a></li>
                                            <li class=""><a href="#" class="">بور بانك</a></li>
                                            <li class=""><a href="#" class="">سماعات الموبايل</a></li>
                                            <li class=""><a href="#" class="">كابلات الشحن</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="mega-menu">
                            <a class="elctronic-dropdown" href="#!" data-target="elctronic-dropdown">الإلكترونيات</a>
                            <div id="elctronic-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="#" class="">أجهزة الكمبيوتر المحمولة</a></li>
                                            <li class=""><a href="#" class="">ألعاب الفيديو</a></li>
                                            <li class=""><a href="#" class="">التلفزيونات</a></li>
                                            <li class=""><a href="#" class="">أجهزة منزلية</a></li>
                                            <li class=""><a href="#" class="">سماعات</a></li>
                                            <li class=""><a href="#" class="">سماعات الرأس و سماعات الأذن</a></li>
                                            <li class=""><a href="#" class="">أجهزة الصوت/الفيديو</a></li>
                                            <li class=""><a href="#" class="">الساعات الذكية والإكسسوارات</a></li>
                                            <li class=""><a href="#" class="">كاميرات وتصوير وفيديو</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-electronics-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="mega-menu">
                            <a class="fashion-dropdown" href="#!" data-target="fashion-dropdown">الأزياء</a>
                            <div id="fashion-dropdown" class="dropdown-content">
                                <div class="contentWrapper">
                                    <div class="categoriesColumn">
                                        <p class="title">الفئات</p>
                                        <ul class="subCategoriesList right">
                                            <li class=""><a href="#" class="">الأزياء النسائية</a></li>
                                            <li class=""><a href="#" class="">الأحذية</a></li>
                                            <li class=""><a href="#" class="">أزياء رجالية</a></li>
                                            <li class=""><a href="#" class="">الساعات</a></li>
                                            <li class=""><a href="#" class="">إكسسوارات الأزياء</a></li>
                                            <li class=""><a href="#" class="">النظارات</a></li>
                                            <li class=""><a href="#" class="">حقائب يد للنساء</a></li>
                                            <li class=""><a href="#" class="">أزياء البنات</a></li>
                                            <li class=""><a href="#" class="">أزياء الأولاد</a></li>
                                        </ul>
                                    </div>
                                    <div class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-fashion-1.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>
                                    <div id="fashion-banner2" class="bannersColumn">
                                        <div class="bannersContent">
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-fashion-2.png"
                                                        class=""></a></div>
                                            <div class=""><a class="banner"><img src="https://a.nooncdn.com/cms/pages/20180820/58f5a14be2603fdb03061d59e0801ded/ar-top-beauty-2.png"
                                                        class=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Categories Menu -->
        </div> <!-- END OF SITE HEADER -->
        @endauth
    @endif
    <div id="wish-cart-container" class="page-wrapper">
        <div class="site-width-container">
            <div class="row" style="margin-bottom:0px;">
                <header>
                    <p class="heading">
                        <span>
                            <strong>عربة التسوق</strong>
                        </span>
                        <span class="counter">
                            2 منتج
                        </span>
                    </p>
                </header>
            </div>
            <div class="row">
                <!--cart and wish list products  -->
                <div id="cart-wish-list-container" class="col l9 m8 s12 right">
                    <!--Cart section  -->
                    <div class="row cart-item-list">
                        <div class="col m12 s12 cart-item">
                            <div class="core-details-container">
                                <div class="image-container">
                                    <a href="#">
                                        <div class="container" style="padding-bottom: 126.375%;">
                                            <div class="media-container">
                                                <img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1515052637/N13098156A_1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="details-container">
                                    <p class="brand">
                                        بوجابو
                                    </p>
                                    <p class="product-name">
                                        عربة أطفال كاميليون 3 مزودة بمظلة شمس قابلة للتمديد
                                    </p>
                                    <p class="details-product-price">
                                        4761 ر.س.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options">
                                <div class="select-wrapper">
                                    <select class="browser-default">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="action-container">
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-heart-o"></i>
                                        إضافة إلى قائمتي المفضلة
                                    </button>
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-trash"></i> إزالة
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col m12 s12 cart-item">
                            <div class="core-details-container">
                                <div class="image-container">
                                    <a href="#">
                                        <div class="container" style="padding-bottom: 126.375%;">
                                            <div class="media-container">
                                                <img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1515310172/N11202025A_1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="details-container">
                                    <p class="brand">
                                        ديسكويرد2
                                    </p>
                                    <p class="product-name">
                                        عطر وانت 100 مل
                                    </p>
                                    <p class="details-product-price">
                                        500 ر.س.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options">
                                <div class="select-wrapper">
                                    <select class="browser-default">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="action-container">
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-heart-o"></i>
                                        إضافة إلى قائمتي المفضلة
                                    </button>
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-trash"></i> إزالة
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Cart Section  -->
                    <!-- Wish list -->
                    <div class="row" style="margin-bottom:0px;">
                        <header>
                            <p class="heading">
                                <span>
                                    <strong>قائمتي المفضلة</strong>
                                </span>
                                <span class="counter">
                                    2 منتج
                                </span>
                            </p>
                        </header>
                    </div>
                    <div class="row cart-item-list">
                        <div class="col m12 s12 cart-item">
                            <div class="core-details-container">
                                <div class="image-container">
                                    <a href="#">
                                        <div class="container" style="padding-bottom: 126.375%;">
                                            <div class="media-container">
                                                <img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1504017371/N12288198A_1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="details-container">
                                    <p class="brand">
                                        سامسونج
                                    </p>
                                    <p class="product-name">
                                        جالاكسي نوت8 ثنائي الشريحة باللون الرمادي 64GB جيجابايت 4G LTE
                                    </p>
                                    <p class="details-product-price">
                                        2099 ر.س.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options">
                                <div class="action-container">
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-shopping-cart"></i>
                                        إضافة إلى عربة التسوق
                                    </button>
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-trash"></i> إزالة
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col m12 s12 cart-item">
                            <div class="core-details-container">
                                <div class="image-container">
                                    <a href="#">
                                        <div class="container" style="padding-bottom: 126.375%;">
                                            <div class="media-container">
                                                <img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1502774918/N11695454A_1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="details-container">
                                    <p class="brand">
                                        بي كول
                                    </p>
                                    <p class="product-name">
                                        وسادة مسند دائرية بالرموز التعبيرية الباكية أصفر
                                    </p>
                                    <p class="details-product-price">
                                        6.50 ر.س.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options">
                                <div class="action-container">
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-shopping-cart"></i>
                                        إضافة إلى عربة التسوق
                                    </button>
                                    <button class="btn-flat" type="submit" name="action">
                                        <i class="fa fa-trash"></i> إزالة
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Wish list  -->
                </div>
                <!--cart details info  -->
                <div id="cart-details-container" class="col s12 m4 l3">
                    <div class="invoice">
                        <div class="coupon">
                            <span class="coupon-input">
                                كوبون&colon;
                                <strong>خمسون</strong>
                            </span>
                            <button class="btn btn-flat">إزالة</button>
                        </div>
                        <div class="invoice-summary">
                            <p class="title">ملخص الطلبية</p>
                            <div class="invoice-row">
                                <span class="heading">المجموع الفرعي</span>
                                <span class="value">7346.70 ر.س.‏</span>
                            </div>
                            <div class="invoice-row">
                                <span class="heading">الشحن</span>
                                <span class="value">مجاني</span>
                            </div>
                            <div class="invoice-row">
                                <span class="heading">الخصم</span>
                                <span class="value">- 50.00 ر.س.‏</span>
                            </div>
                            <div class="coupon-row invoice-row">
                                <img src="https://k.nooncdn.com/s/app/2018/com-www-bigalog/static/7c24d5b4-8dc7-43b3-81e5-b0a362522cd7/images/discount-coupon.png"
                                    alt="مستعمل" class="jsx-3414296853">
                                خصم 50
                            </div>
                            <div class="total-row invoice-row">
                                <span class="heading">المجموع
                                    <span class="vat-note">
                                        (شاملاً ضريبة القيمة المضافة)
                                    </span>
                                </span>
                                <span class="value discount-value">7296.70 ر.س.‏</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-cta-wrapper">
                        <button class="btn">
                            <span>7296.70 ر.س.‏</span>
                            تابع للدفع الآمن
                        </button>
                    </div>
                </div>
            </div>
            <!-- button for countione shoping -->
            <div class="row support-info">
                <button class="btn-flat" type="submit" name="action">
                    متابعة التسوق
                </button>
            </div>

            <!-- Related products Slider -->
            <div>
                <h4 class="related-product-title">الذين اشتروا هذا المنتج، قاموا بشراء هذه المنتجات أيضاً</h4>
            </div>
            <div class="row products-slider" style="position:relative;">
                <div class="your-class" dir="rtl">
                    <!-- First products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1538559999/N18246211A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون XS ماكس مع فيس تايم بشريحة ثنائية… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- Second products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1511436269/N12311049A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون X مع فيس تايم بلون فضي وذاكرة… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- third products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1539007010/N13960314A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32
                                    جيجابايت ومزود بخدمة 4G </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!--4th products  -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1524285004/N14034965A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيباد 2018 بحجم 9.7 بوصات بسعة 32… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- 5th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1511436269/N12311049A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون X مع فيس تايم بلون فضي وذاكرة… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- 6th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1539007010/N13960314A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32
                                    جيجابايت ومزود بخدمة 4G </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- 7th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1538559999/N18246211A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون XS ماكس مع فيس تايم بشريحة ثنائية… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- 8th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1511436269/N12311049A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون X مع فيس تايم بلون فضي وذاكرة… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- 9th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1524285004/N14034965A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيباد 2018 بحجم 9.7 بوصات بسعة 32… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!--10th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1511436269/N12311049A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون X مع فيس تايم بلون فضي وذاكرة… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- 11th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1538559999/N18246211A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون XS ماكس مع فيس تايم بشريحة ثنائية… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                    <!-- 12th products -->
                    <div class="card sticky-action">
                        <div class="sale_icon">
                            %خصم 20
                        </div>
                        <div class="add_to_wish_list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light img-height">
                            <a href="#">
                                <img src="https://k.nooncdn.com/t_desktop-thumbnail-v2/v1538559999/N18246211A_1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="activator material-icons left">more_vert</i>
                                <p class="ellipsis1">آيفون XS ماكس مع فيس تايم بشريحة ثنائية… </p>
                            </span>
                            <strong class="price-old"> 20 س.ر. </strong>
                            <strong class="price-new"> 80 س.ر.</strong>
                        </div>
                        <div class="card-reveal card-reveal-position " style="text-align:right">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                            <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                        </div>
                    </div>
                </div>
                <div class="prev">
                    <span class="prev-arrow">
                        <i class="material-icons right">keyboard_arrow_right</i> </span>
                </div>
                <div class="next">
                    <span class="next-arrow">
                        <i class="material-icons left">keyboard_arrow_left</i> </span>
                </div>
            </div>
            <!-- End Related products Sldier -->
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row" dir="rtl">
                <div class="col l4 m4 s12">
                    <h5 class=""> إلكترونيات</h5>
                    <ul>
                        <li><a class="" href="#!">أجهزة منزلية</a></li>
                        <li><a class="" href="#!">أجهزة الكمبيوتر المحمول</a></li>
                        <li><a class="" href="#!">سماعات</a></li>
                        <li><a class="" href="#!">التلفزيونات</a></li>
                        <li><a class="" href="#!">أجهزة الصوت والفيديو</a></li>
                        <li><a class="" href="#!">الساعات الذكية والإكسسوارات</a></li>
                    </ul>
                </div>
                <div class="col l4 m4 s12">
                    <h5 class="">المنزل</h5>
                    <ul>
                        <li><a class="" href="#!">ديكورات المنزل</a></li>
                        <li><a class="" href="#!">مطبخ و أدوات طعام</a></li>
                        <li><a class="" href="#!">تخزيين وتنظيم منزلي</a></li>
                    </ul>
                </div>
                <div class="col l4 m4 s12">
                    <h5 class="">جوالات</h5>
                    <ul>
                        <li><a class="" href="#!">أبل</a></li>
                        <li><a class="" href="#!">سامسونج</a></li>
                        <li><a class="" href="#!">هواواي</a></li>
                        <li><a class="" href="#!">لينفو</a></li>
                        <li><a class="" href="#!">ون بلس</a></li>
                        <li><a class="" href="#!">اتش تي سي</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" dir="rtl" style="margin-bottom:40px; text-align:center;">
                <div class="col l12 m12 s12">
                    <h5 class=""> تواصل معنا</h5>
                    <ul>
                        <li style="display:inline; margin-left:8px;"> <a class="btn-floating   waves-effect waves-light"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li style="display:inline; margin-left:8px;"> <a class="btn-floating   waves-effect waves-light"><i
                                    class="fa fa-snapchat"></i></a></li>
                        <li style="display:inline; margin-left:8px;"> <a class="btn-floating  waves-effect waves-light"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li style="display:inline; margin-left:8px;"> <a class="btn-floating   waves-effect waves-light"><i
                                    class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright" style="color: #1D3557">
            <div class="container row" dir=rtl style="text-align: center;">
                <div class="col l8 m8  s12">
                    <ul>
                        <li style="display: inline-block; margin-left:20px;"><a class="" href="#!">سياسة الضمان</a></li>
                        <li style="display: inline-block; margin-left:20px;"><a class="" href="#!">شروط البيع</a></li>
                        <li style="display: inline-block; margin-left:20px;"><a class="" href="#!">سياسة الخصوصية</a></li>
                    </ul>
                </div>
                <div class="col l4 m4  s12">

                    © جميع الحقوق محفوظة
                    <a class="" href="#!">لشركة طور</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="overlay"></div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app-front.js') }}"></script>
</body>
@endsection