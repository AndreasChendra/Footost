<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('images/app/logo_black.png') }}" type="image/icon type">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
            <img class="bgbanner" src="/images/app/header.jpg" alt="header">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <span class="bannertext" style="position: absolute; left: 8%; top: 20%; font-style: italic; font-size: 36px;">Footost</span> 
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" style="position: absolute; right: 27%; top: 30%; ">
                                <a class="nav-link" href="/promo">
                                    <span style="font-size: 20px; color: white;">{{ __('Promo') }}</span></a>
                            </li>
                            <li class="nav-item" style="position: absolute; right: 18%; top: 30%; ">
                                <a class="nav-link" href="/membership">
                                    <span style="font-size: 20px; color: white;">{{ __('Membership') }}</span></a>
                            </li>
                            <li class="nav-item" style="position: absolute; right: 12%; top: 30%; ">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <span style="font-size: 18px; color: white;">{{ __('Login') }}</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style="position: absolute; right: 5%; top: 30%; ">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <span style="font-size: 18px; color: white;">{{ __('Register') }}</span></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item" style="position: absolute; right: 25%; top: 30%; ">
                                <a class="nav-link" href="/promo">
                                    <span style="font-size: 18px; color: white;">{{ __('Promo') }}</span></a>
                            </li>
                            <li class="nav-item" style="position: absolute; right: 16%; top: 30%; ">
                                <a class="nav-link" href="/membership">
                                    <span style="font-size: 18px; color: white;">{{ __('Membership') }}</span></a>
                            </li>
                            <li class="nav-item dropdown" style="position: absolute; right: 5%; top: 30%;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset(Auth::user()->img_profile) }}" alt="" style="border-radius: 50%" width="35px" height="35px">
                                    <span class="pl-2" style="font-size: 20px; color: white;">
                                        {{ Auth::user()->name }}
                                    </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        Profile
                                    </a>

                                    <form id="profile-form" action="/profile" method="GET" class="d-none">
                                        @csrf
                                    </form>
                                    @if (Auth::user()->role_id == 2)
                                        {{-- kalau ada shop tampilin my store --}}
                                        <a class="dropdown-item" href=""
                                        onclick="event.preventDefault();
                                                        document.getElementById('viewMyStore').submit();">
                                            My Store
                                        </a>

                                        <form id="viewMyStore" action="/mystore/{{ Auth::user()->id }}" method="GET" class="d-none">
                                            @csrf
                                        </form>

                                        <form id="" action="/" method="GET" class="d-none">
                                            @csrf
                                        </form>

                                        {{-- user view transaction history--}}
                                        <a class="dropdown-item" href="/viewTransactionHistory"
                                        onclick="event.preventDefault();
                                                        document.getElementById('viewTransactionHistory').submit();">
                                            View Transaction History
                                        </a>

                                        <form id="viewTransactionHistory" action="/viewTransactionHistory" method="GET" class="d-none">
                                            @csrf
                                        </form>
                                    @endif
                                    
                                    @if (Auth::user()->role_id == 1)
                                    {{-- admin view all user --}}
                                    <a class="dropdown-item" href="/viewAllUser"
                                    onclick="event.preventDefault();
                                                    document.getElementById('viewAllUser').submit();">
                                        View All User
                                    </a>

                                    <form id="viewAllUser" action="/viewAllUser" method="GET" class="d-none">
                                        @csrf
                                    </form>

                                    {{-- admin view all transaction --}}
                                    <a class="dropdown-item" href="/viewAllTransaction"
                                    onclick="event.preventDefault();
                                                    document.getElementById('viewAllTransaction').submit();">
                                        View All Transaction
                                    </a>

                                    <form id="viewAllTransaction" action="/viewAllTransaction" method="GET" class="d-none">
                                        @csrf
                                    </form>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>
