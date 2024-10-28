<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Makeup Shop - Magazin de machiaje</title>

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    <!--====== HEADER PART ENDS ======-->
    <div id="app">

        <!--====== PRELOADER PART START ======-->

        <div class="preloader">
            <div class="spin">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>

        <!--====== PRELOADER PART START ======-->

        <!--====== HEADER PART START ======-->

        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-fixed-top navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="assets/images/logo.png" alt="Logo" width=220 height=50>
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a data-scroll-nav="0" href="http://127.0.0.1:8000/">Acasa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#product">Produse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#service">Servicii</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#showcase">Portofoliu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#team">Echipa</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#testimonial">Recenzii</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#contact">Contact</a>
                                    </li>
                                    @if (Route::has('login'))
                                        @auth
                                            <div>
                                                <li class="nav-item">
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Deconectare
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </div>
                                            <cart />
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Conectare</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a href="{{ route('register') }}"
                                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Inregistrare</a>
                                                </li>
                                            @endif
                                        @endauth
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')

    </div>

    <!-- Stripe JavaScript library -->
    <script src="https://js.stripe.com/v3/"></script>


    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>


    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>


    <!--====== nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>

    <!--====== Nice Number js ======-->
    <script src="assets/js/jquery.nice-number.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    @yield('scripts')

    <script>
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    </script>
</body>

</html>