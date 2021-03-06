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
    <!-- Main Content -->
    <div id="product-category-container" class="page-wrapper">
        <div class="site-width-container">
            <div class="row">
                <div id="categ-mobile-view" class="col s12 right hide-on-med-and-up">
                    <div id="search-result">
                        <span class="category-title">سماعات</span>
                        <span class="result-text">تم العثور على 300 نتيجة/نتائج لبحثك</span>
                    </div>
                    <div id="categ-modals">
                        <!-- Modal Trigger -->
                        <a class="btn outline modal-trigger" href="#filter-modal">تصنيف حسب</a>
                        <a class="btn outline modal-trigger" href="#sort-modal">ترتيب حسب</a>
                        <!-- End of Modal Trigger -->

                        <!-- Modal Structure -->
                        <!-- Filter Modal -->
                        <div id="product-category-container" class="page-wrapper">
                            <div id="filter-modal" class="modal categ-mobile-modal modal-fixed-footer">
                                <div class="modal-header">
                                    <span>تصنيف حسب</span>
                                    <span><i class="modal-close fa fa-close"></i></span>
                                </div>
                                <div class="modal-content">
                                    <div class="filters-panel">
                                        <ul class="collapsible expandable">
                                            <li class="active level-1">
                                                <div class="collapsible-header"><i class="fa fa-angle-down"></i>الفئة</div>
                                                <div class="collapsible-body">
                                                    <ul class="categ-sidebar-elm">
                                                        <li>
                                                            <span class="count">(543)</span>
                                                            <span>الأزياء</span>
                                                        </li>
                                                        <li>
                                                            <span class="count">(93)</span>
                                                            <span>الإلكترونيات</span>
                                                        </li>
                                                        <li>
                                                            <span class="count">(743)</span>
                                                            <span>الموبايلات</span>
                                                        </li>
                                                        <li>
                                                            <span class="count">(43)</span>
                                                            <span>المنزل والمطبخ</span>
                                                        </li>
                                                        <li>
                                                            <span class="count">(54)</span>
                                                            <span>الجمال والعطور</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="level-1">
                                                <div class="collapsible-header"><i class="fa fa-angle-left"></i>الماركة</div>
                                                <div class="collapsible-body">
                                                    <ul class="categ-sidebar-elm">
                                                        <li>
                                                            <span class="count">(543)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>سامسونج</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <span class="count">(93)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>أبل</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <span class="count">(743)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>هواوي</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <span class="count">(54)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>اتش بي</span>
                                                            </label>
                                                        </li>
                                                        <a class="limit-toggle" href="#">مشاهدة الكل</a>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li id="categ-sidebar-price" class="level-1">
                                                <div class="collapsible-header"><i class="fa fa-angle-left"></i>
                                                    <span>
                                                        السعر
                                                        <span class="currency-simple">(ر.س.)</span>
                                                    </span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="price-wrapper">
                                                        <input type="number" value="1" name="min" class="textInput">
                                                        <span class="between">إلى</span>
                                                        <input type="number" value="1" name="min" class="textInput">
                                                        <a class="go-action" href="#">بحث</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="level-1">
                                                <div class="collapsible-header"><i class="fa fa-angle-left"></i>عائلة
                                                    اللون</div>
                                                <div class="collapsible-body">
                                                    <ul class="categ-sidebar-elm">
                                                        <li>
                                                            <span class="count">(743)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>متعدد الألوان</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <span class="count">(33)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>أسود</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <span class="count">(5)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>أزرق</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <span class="count">(13)</span>
                                                            <label class="multi-selection">
                                                                <input type="checkbox" />
                                                                <span>أبيض</span>
                                                            </label>
                                                        </li>
                                                        <a class="limit-toggle" href="#">مشاهدة الكل</a>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn outline">إعادة تعيين</a>
                                    <a href="#" class="btn">إضافة</a>
                                </div>
                            </div>
                        </div>
                        <!-- Sort by Modal -->
                        <div id="product-category-container" class="page-wrapper">
                            <div id="sort-modal" class="modal categ-mobile-modal">
                                <div class="modal-header">
                                    <span>ترتيب حسب</span>
                                    <span><i class="modal-close fa fa-close"></i></span>
                                </div>
                                <div class="modal-content top-filter">
                                    <form action="#">
                                        <p>
                                            <label>
                                                <input name="group1" class="with-gap" type="radio" checked />
                                                <span>الأكثر رواجا</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" />
                                                <span>السعر من الأكثر للأقل</span>
                                            </label>
                                        </p>
                                        <label>
                                            <input class="with-gap" name="group1" type="radio" />
                                            <span> السعر من الأقل للأكثر</span>
                                        </label>
                                        <p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal Structure -->
                    </div>
                </div>
                <div class="filters-panel col m3 right hide-on-small-only">
                    <ul class="collapsible expandable">
                        <li class="active">
                            <div class="collapsible-header"><i class="fa fa-angle-down"></i>الفئة</div>
                            <div class="collapsible-body">
                                <ul class="categ-sidebar-elm">
                                    <li>
                                        <span class="count">(543)</span>
                                        <span>الأزياء</span>
                                    </li>
                                    <li>
                                        <span class="count">(93)</span>
                                        <span>الإلكترونيات</span>
                                    </li>
                                    <li>
                                        <span class="count">(743)</span>
                                        <span>الموبايلات</span>
                                    </li>
                                    <li>
                                        <span class="count">(43)</span>
                                        <span>المنزل والمطبخ</span>
                                    </li>
                                    <li>
                                        <span class="count">(54)</span>
                                        <span>الجمال والعطور</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="active">
                            <div class="collapsible-header"><i class="fa fa-angle-down"></i>الماركة</div>
                            <div class="collapsible-body">
                                <ul class="categ-sidebar-elm">
                                    <li>
                                        <span class="count">(543)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>سامسونج</span>
                                        </label>
                                    </li>
                                    <li>
                                        <span class="count">(93)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>أبل</span>
                                        </label>
                                    </li>
                                    <li>
                                        <span class="count">(743)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>هواوي</span>
                                        </label>
                                    </li>
                                    <li>
                                        <span class="count">(54)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>اتش بي</span>
                                        </label>
                                    </li>
                                    <a class="limit-toggle" href="#">مشاهدة الكل</a>
                                </ul>
                            </div>
                        </li>
                        <li id="categ-sidebar-price" class="active">
                            <div class="collapsible-header"><i class="fa fa-angle-down"></i>
                                <span>
                                    السعر
                                    <span class="currency-simple">(ر.س.)</span>
                                </span>
                            </div>
                            <div class="collapsible-body">
                                <div class="price-wrapper">
                                    <input type="number" value="1" name="min" class="textInput">
                                    <span class="between">إلى</span>
                                    <input type="number" value="1" name="min" class="textInput">
                                    <a class="go-action" href="#">بحث</a>
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <div class="collapsible-header"><i class="fa fa-angle-down"></i>عائلة اللون</div>
                            <div class="collapsible-body">
                                <ul class="categ-sidebar-elm">
                                    <li>
                                        <span class="count">(743)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>متعدد الألوان</span>
                                        </label>
                                    </li>
                                    <li>
                                        <span class="count">(33)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>أسود</span>
                                        </label>
                                    </li>
                                    <li>
                                        <span class="count">(5)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>أزرق</span>
                                        </label>
                                    </li>
                                    <li>
                                        <span class="count">(13)</span>
                                        <label class="multi-selection">
                                            <input type="checkbox" />
                                            <span>أبيض</span>
                                        </label>
                                    </li>
                                    <a class="limit-toggle" href="#">مشاهدة الكل</a>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="product-list-container" class="col s12 m9">
                    <div class="row product-list-wrapper">
                        <div class="row top-filter hide-on-small-only">
                            <div class="filter-options">
                                <label class="filter-label">عرض</label>
                                <a class='dropdown-trigger btn-flat btn btn-filter left' href='#' data-target='dropdown2'><i
                                        class="material-icons">arrow_drop_down</i>50 لكل صفحة</a>
                                <!-- Dropdown Structure -->
                                <form action="#" id='dropdown2' class='dropdown-content dropdown-conten-filter'>
                                    <p>
                                        <label>
                                            <input name="group1" class="with-gap" type="radio" checked />
                                            <span>50 لكل صفحة</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap" name="group1" type="radio" />
                                            <span>100 لكل صفحة</span>
                                        </label>
                                    </p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>150 لكل صفحة</span>
                                    </label>
                                    <p>

                                </form>
                            </div>
                            <div class="filter-options">
                                <label class="filter-label">ترتيب حسب</label>
                                <a class='dropdown-trigger btn-flat btn btn-filter left' href='#' data-target='dropdown1'><i
                                        class="material-icons">arrow_drop_down</i>الأكثر رواجا</a>
                                <form action="#" id='dropdown1' class='dropdown-conten-filter dropdown-content'>
                                    <p>
                                        <label>
                                            <input name="group1" class="with-gap" type="radio" checked />
                                            <span>الأكثر رواجا</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap" name="group1" type="radio" />
                                            <span>السعر من الأكثر للأقل</span>
                                        </label>
                                    </p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span> السعر من الأقل للأكثر</span>
                                    </label>
                                    <p>

                                </form>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
                                <div class="card sticky-action">
                                    <div class="sale_icon">
                                        %خصم 35
                                    </div>
                                    <div class="add_to_wish_list">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wish list">
                                            <i class="material-icons wish-shape" style="color:#A8DADC">favorite_border</i></a>
                                    </div>
                                    <div class="card-image waves-effect waves-block waves-light img-height">
                                        <a href="{{ route('product.details', 'iPhone-7-black-no-face-time') }}">
                                            <img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1513691159/N11046051A_1.jpg">
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">
                                            <i class="activator material-icons left">more_vert</i>
                                            <p class="ellipsis1">آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                        </span>
                                        <strong class="price-old"> 2000 س.ر. </strong>
                                        <strong class="price-new"> 1300 س.ر.</strong>
                                    </div>
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col l2 m3 s6">
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
                                    <div class="card-action">
                                        <p style='-webkit-margin-before: 5px;'><a href="#" class="add-to-cart" style="color:#1D3557">إضافة
                                                لعربة التسوق<i class="material-icons cart-shop">add_shopping_cart</i>
                                            </a></p>
                                    </div>
                                    <div class="card-reveal card-reveal-position " style="text-align:right">
                                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                        <p>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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