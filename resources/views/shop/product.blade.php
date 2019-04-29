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
    <!--   page wrapper -->
    <div class="page-wrapper">
        <!-- Product details section1 -->
        <div class="row product-detials-wrapper">
            <!--slider images in mobile view -->
            <div class="col hide-on-med-and-up s12">
                <div class="single-product-slider-mobile">
                    <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1513691159/N11046051A_1.jpg"></a></div>
                    <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430529/N11046051A_2.jpg"></a></div>
                    <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430527/N11046051A_3.jpg"></a></div>
                    <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430521/N11046051A_4.jpg"></a></div>
                    <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430531/N11046051A_5.jpg"></a></div>
                </div>
            </div>
            <!-- product info-->
            <div class="col l6 m6 s12">
                <div class="products-info">
                    <a href="#!"><span>أبل</span></a>
                    <h6>آيفون 7 وبدون فيس تايم بلون أسود بذاكرة سعة 32 جيجابايت ومزود بخدمة 4G</h6>
                    <p class="product-model">رقم الموديل:2345</p>
                    <div class="product-rating">
                        <div class="stars-outer">
                            <span class="stars-inner"></span>
                        </div>
                        <span class="rating-score">4.5</span>
                        <span class="rating-total">(4568) تقييم </span>
                    </div>
                    <div class="product-price">
                        <span class="old-price">300 ر.س.</span>
                        <span class="sale"> خصم 20%</span>
                        <span class="new-price">280 ر.س.</span>
                    </div>
                </div>
                <div class="product-order-info">
                    <div class="col l6 s6">
                        <label>اللون</label>
                        <select class="browser-default">
                            <option value="1" selected>ذهبي</option>
                            <option value="2">أبيض</option>
                            <option value="3">فضي</option>
                        </select>
                    </div>
                    <div class="col l6 s6">
                        <label>الحجم</label>
                        <select class="browser-default">
                            <option value="1" selected>صغير</option>
                            <option value="2">وسط</option>
                            <option value="3">كبير</option>
                        </select>
                    </div>
                    <div class="adding-to-cart">
                        <div class="input-field col l10 m9 s10 adding-to-cart-btn">
                            <a style="width:100%; height:100%" class="waves-effect waves-light btn">إضافة لعربة التسوق</a>
                        </div>
                        <div class="col l2 m3 s2">
                            <label class="order-quatity">الكمية</label>
                            <select class="browser-default quantity">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!--images slider in desktop and mediam view -->
            <!-- Slider image -->
            <div class="col l6 m6 hide-on-small-only">
                <div class="col l11 m10 single-product-img-col">
                    <div class="single-product-slider">
                        <div class="single-product-img"><a herf="#"><img class="zoom_05" src="https://k.nooncdn.com/t_desktop-pdp-v1/v1513691159/N11046051A_1.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img class="zoom_05" src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430529/N11046051A_2.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img class="zoom_05" src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430527/N11046051A_3.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img class="zoom_05" src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430521/N11046051A_4.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img class="zoom_05" src="https://k.nooncdn.com/t_desktop-pdp-v1/v1511430531/N11046051A_5.jpg"></a></div>
                    </div>
                </div>
                <!-- Nav Slider image -->
                <div class="col l1 m2 nav-slider-width">
                    <div class="single-product-nav">
                        <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-thumbnail-v1/v1513691159/N11046051A_1.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-thumbnail-v1/v1511430529/N11046051A_2.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-thumbnail-v1/v1511430527/N11046051A_3.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-thumbnail-v1/v1511430521/N11046051A_4.jpg"></a></div>
                        <div class="single-product-img"><a herf="#"><img src="https://k.nooncdn.com/t_desktop-thumbnail-v1/v1511430531/N11046051A_5.jpg"></a></div>
                    </div>
                    <span class="numbers_of_slider" style="display:none">5</span>
                </div>
            </div>
        </div>
        <!--End Products details section1 -->
        <!--Products details section2  -->
        <div class="product-details">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab"><a href="#overview">نظرة عامة</a></li>
                        <li class="tab"><a class="active" href="#spec">المواصفات</a></li>
                        <li class="tab"><a href="#reviews">التقييمات</a></li>
                    </ul>
                </div>
                <div class="tabs-container">
                    <div id="overview" class="col s12">
                        <p class="title">
                            مميزات المنتج
                        </p>
                        <ul>
                            <li>الجسم المعدني مدعم بزجاج معزز بالأيون وطلاء مقاوم للزيوت يعزز المتانة</li>
                            <li>شاشة رتينا عالية الوضوح توفر تجربة بصرية مذهلة</li>
                            <li>تم تصميم إيماءات الأصابع للتحكم في الهاتف بيد واحدة بسهولة</li>
                            <li>تم تصميم إيماءات الأصابع للتحكم في الهاتف بيد واحدة بسهولة</li>
                        </ul>
                    </div>
                    <div id="spec" class="col s12">
                        <div class="col s12 l6 right">
                            <table class="striped">
                                <tbody>
                                    <tr>
                                        <td>اسم اللون</td>
                                        <td>ذهبي</td>
                                    </tr>
                                    <tr>
                                        <td>دقة الكاميرا الأساسية</td>
                                        <td>8 ميغا بكسل</td>
                                    </tr>
                                    <tr>
                                        <td>دقة الشاشة</td>
                                        <td>750x1334</td>
                                    </tr>
                                    <tr>
                                        <td>حجم الشاشة</td>
                                        <td>4.7 بوصة</td>
                                    </tr>
                                    <tr>
                                        <td>وزن المنتج</td>
                                        <td>143 غم</td>
                                    </tr>
                                    <tr>
                                        <td>حجم البطارية</td>
                                        <td>1810 مللي أمبير / ساعة</td>
                                    </tr>
                                    <tr>
                                        <td>عدد شريحة Sim</td>
                                        <td>شريحة هاتف</td>
                                    </tr>
                                    <tr>
                                        <td>الشبكة</td>
                                        <td>4G LTE</td>
                                    </tr>
                                    <tr>
                                        <td>دقة الكاميرا الثانوية</td>
                                        <td>1.2 ميغا بكسل</td>
                                    </tr>
                                    <tr>
                                        <td>رقم الموديل</td>
                                        <td>iPhone 6</td>
                                    </tr>
                                    <tr>
                                        <td>اسم الموديل</td>
                                        <td>iPhone 6 With FaceTime</td>
                                    </tr>
                                    <tr>
                                        <td>طول المنتج</td>
                                        <td>138.1 مم</td>
                                    </tr>
                                    <tr>
                                        <td>ارتفاع المنتج</td>
                                        <td>6.9 مم</td>
                                    </tr>
                                    <tr>
                                        <td>عرض/عمق المنتج</td>
                                        <td>67 مم</td>
                                    </tr>
                                    <tr>
                                        <td>CPU</td>
                                        <td>Dual-core 1.4 GHz Typhoon (ARM v8-based)</td>
                                    </tr>
                                    <tr>
                                        <td>WLAN</td>
                                        <td>Wi-Fi 802.11 a/b/g/n/ac</td>
                                    </tr>
                                    <tr>
                                        <td>الذاكرة الداخلية</td>
                                        <td>32 غيغابايت</td>
                                    </tr>
                                    <tr>
                                        <td>نوع الشريحة</td>
                                        <td>بطاقة SIM نانو</td>
                                    </tr>
                                    <tr>
                                        <td>قدرة الطلب الصوتي</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>نطاق تردد الشبكة</td>
                                        <td>GSM / LTE / UMTS</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col s12 l6">
                            <table class="striped">
                                <tbody>
                                    <tr>
                                        <td>اسم اللون</td>
                                        <td>ذهبي</td>
                                    </tr>
                                    <tr>
                                        <td>دقة الكاميرا الأساسية</td>
                                        <td>8 ميغا بكسل</td>
                                    </tr>
                                    <tr>
                                        <td>دقة الشاشة</td>
                                        <td>750x1334</td>
                                    </tr>
                                    <tr>
                                        <td>حجم الشاشة</td>
                                        <td>4.7 بوصة</td>
                                    </tr>
                                    <tr>
                                        <td>وزن المنتج</td>
                                        <td>143 غم</td>
                                    </tr>
                                    <tr>
                                        <td>حجم البطارية</td>
                                        <td>1810 مللي أمبير / ساعة</td>
                                    </tr>
                                    <tr>
                                        <td>عدد شريحة Sim</td>
                                        <td>شريحة هاتف</td>
                                    </tr>
                                    <tr>
                                        <td>الشبكة</td>
                                        <td>4G LTE</td>
                                    </tr>
                                    <tr>
                                        <td>دقة الكاميرا الثانوية</td>
                                        <td>1.2 ميغا بكسل</td>
                                    </tr>
                                    <tr>
                                        <td>رقم الموديل</td>
                                        <td>iPhone 6</td>
                                    </tr>
                                    <tr>
                                        <td>اسم الموديل</td>
                                        <td>iPhone 6 With FaceTime</td>
                                    </tr>
                                    <tr>
                                        <td>طول المنتج</td>
                                        <td>138.1 مم</td>
                                    </tr>
                                    <tr>
                                        <td>ارتفاع المنتج</td>
                                        <td>6.9 مم</td>
                                    </tr>
                                    <tr>
                                        <td>عرض/عمق المنتج</td>
                                        <td>67 مم</td>
                                    </tr>
                                    <tr>
                                        <td>CPU</td>
                                        <td>Dual-core 1.4 GHz Typhoon (ARM v8-based)</td>
                                    </tr>
                                    <tr>
                                        <td>WLAN</td>
                                        <td>Wi-Fi 802.11 a/b/g/n/ac</td>
                                    </tr>
                                    <tr>
                                        <td>الذاكرة الداخلية</td>
                                        <td>32 غيغابايت</td>
                                    </tr>
                                    <tr>
                                        <td>نوع الشريحة</td>
                                        <td>بطاقة SIM نانو</td>
                                    </tr>
                                    <tr>
                                        <td>قدرة الطلب الصوتي</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>نطاق تردد الشبكة</td>
                                        <td>GSM / LTE / UMTS</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="reviews" class="col s12">
                        <div class="reviews-sub-wrapper">
                            <div class="rating-container col s12 l6">
                                <div class="badge-wrapper">
                                    <p class="title">التصنيف العام</p>
                                    <div class="aggregate-rating">
                                        <span class="stars-outer">
                                            <span class="stars-inner"></span>
                                        </span>
                                        <span class="rating-val">2.5</span>
                                    </div>
                                    <p class="count">استناداً إلى 400 تقييم</p>
                                </div>
                                <div class="rating-chart col s6 m8">
                                    <table>
                                        <tbody>
                                            <tr class="chart-row">
                                                <td class="rating-level">5</td>
                                                <td class="value-bar">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 70%"></div>
                                                    </div>
                                                </td>
                                                <td class="value-num">43</td>
                                            </tr>
                                            <tr class="chart-row">
                                                <td class="rating-level">4</td>
                                                <td class="value-bar">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td class="value-num">33</td>
                                            </tr>
                                            <tr class="chart-row">
                                                <td class="rating-level">3</td>
                                                <td class="value-bar">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 10%"></div>
                                                    </div>
                                                </td>
                                                <td class="value-num">200</td>
                                            </tr>
                                            <tr class="chart-row">
                                                <td class="rating-level">2</td>
                                                <td class="value-bar">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 10%"></div>
                                                    </div>
                                                </td>
                                                <td class="value-num">200</td>
                                            </tr>
                                            <tr class="chart-row">
                                                <td class="rating-level">1</td>
                                                <td class="value-bar">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 10%"></div>
                                                    </div>
                                                </td>
                                                <td class="value-num">200</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="highlight-wrapper">
                                <div>
                                    <p class="title">الإيجابيات</p>
                                    <ul>
                                        <li>كاميرا جيدة</li>
                                        <li>التصميم</li>
                                        <li>سهل الاستخدام</li>
                                        <li>سريع</li>
                                        <li>كاميرا ممتازة</li>
                                    </ul>
                                </div>
                                <div>
                                    <p class="title">السلبيات</p>
                                    <ul>
                                        <li>مرتفع الثمن</li>
                                        <li>غالى الثمن</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-container">
                            <div class="review-segment">
                                <div class="rating">
                                    <span class="stars-outer">
                                        <span class="stars-inner"></span>
                                    </span>
                                    <span class="rating-val">4</span>
                                </div>
                                <div class="header">
                                    <span class="author">Shaikhah Maasher</span>
                                    <span class="date-published">24-9-2018</span>
                                </div>
                                <div class="highlight-container">
                                    <p class="pros">Face ID, AnEmoji, Stereo Speakers, 3D Touch</p>
                                    <p class="cons">No Micro SD, Small Battery, RAM Management Is Worst, No Headphone
                                        Jack, IP 67, No Fast Charger In The Box, High Price, Expensive Back Replacement</p>
                                </div>
                                <div class="description">
                                    <p>It's just for showoff i don't get why people buy iPhones glad i shifted from
                                        iPhone X to Galaxy S9+ the iPhone X has annoying notch also it has no headphone
                                        jack but still it is only 67 water &amp; dust resistant on the other hand
                                        Galaxy S9+ has headphone jack &amp; still retains IP 68 water &amp; dust...</p>
                                </div>
                            </div>
                            <div class="review-segment">
                                <div class="rating">
                                    <span class="stars-outer">
                                        <span class="stars-inner"></span>
                                    </span>
                                    <span class="rating-val">4</span>
                                </div>
                                <div class="header">
                                    <span class="author">Shaikhah Maasher</span>
                                    <span class="date-published">24-9-2018</span>
                                </div>
                                <div class="highlight-container">
                                    <p class="pros">Face ID, AnEmoji, Stereo Speakers, 3D Touch</p>
                                    <p class="cons">No Micro SD, Small Battery, RAM Management Is Worst, No Headphone
                                        Jack, IP 67, No Fast Charger In The Box, High Price, Expensive Back Replacement</p>
                                </div>
                                <div class="description">
                                    <p>It's just for showoff i don't get why people buy iPhones glad i shifted from
                                        iPhone X to Galaxy S9+ the iPhone X has annoying notch also it has no headphone
                                        jack but still it is only 67 water &amp; dust resistant on the other hand
                                        Galaxy S9+ has headphone jack &amp; still retains IP 68 water &amp; dust...</p>
                                </div>
                            </div>
                            <div class="review-segment">
                                <div class="rating">
                                    <span class="stars-outer">
                                        <span class="stars-inner"></span>
                                    </span>
                                    <span class="rating-val">4</span>
                                </div>
                                <div class="header">
                                    <span class="author">Shaikhah Maasher</span>
                                    <span class="date-published">24-9-2018</span>
                                </div>
                                <div class="highlight-container">
                                    <p class="pros">Face ID, AnEmoji, Stereo Speakers, 3D Touch</p>
                                    <p class="cons">No Micro SD, Small Battery, RAM Management Is Worst, No Headphone
                                        Jack, IP 67, No Fast Charger In The Box, High Price, Expensive Back Replacement</p>
                                </div>
                                <div class="description">
                                    <p>It's just for showoff i don't get why people buy iPhones glad i shifted from
                                        iPhone X to Galaxy S9+ the iPhone X has annoying notch also it has no headphone
                                        jack but still it is only 67 water &amp; dust resistant on the other hand
                                        Galaxy S9+ has headphone jack &amp; still retains IP 68 water &amp; dust...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End Products details section2  -->
        <!-- Related products Slider -->

        <div class="related-products-wrapper">
            <div>
                <h4 class="related-product-title">قد يعجبك أيضا</h4>
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
        </div>
        <!-- End Related products Sldier -->
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
    </div>
    <div class="overlay"></div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('zoom-master/jquery.zoom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('elevatezoom-master/jquery.elevatezoom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app-front.js') }}"></script>
</body>
@endsection