<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('images/logo_black.png') }}" type="image/icon type">
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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="text-center">
                <div class="bannertext">
                    <img class="bgbanner" src="/images/banner.jpg" alt="banner">
                    <div class="bannertext" style="position: absolute; top: 20px; right: 16px;">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
        
                        </ul>
        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item" style="position: absolute; right: 120px; top: 30%; ">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <span style="font-size: 18px; color: white;">{{ __('Login') }}</span></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item" style="position: absolute; right: 10px; top: 30%; ">
                                        <a class="nav-link" href="{{ route('register') }}">
                                            <span style="font-size: 18px; color: white;">{{ __('Register') }}</span></a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown" style="position: absolute; right: 5%; top: 30%;">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img src="/images/{{Auth::user()->img_profile}}" alt="" style="border-radius: 50%" width="35px" height="35px">
                                        <span class="pl-4" style="font-size: 20px; color: white;">
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
                                        {{-- kalau ada shop tampilin my shop --}}
                                        <a class="dropdown-item" href=""
                                           onclick="event.preventDefault();
                                                         document.getElementById().submit();">
                                            My Shop
                                        </a>
                                        @endif

                                        {{-- admin view all user --}}
                                        @if (Auth::user()->role_id == 1)
                                        <a class="dropdown-item" href="/viewAllUser"
                                        onclick="event.preventDefault();
                                                        document.getElementById('viewAllUser').submit();">
                                            View All User
                                        </a>

                                        <form id="viewAllUser" action="/viewAllUser" method="GET" class="d-none">
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
                    <a href="#" style="color: white"><h2 class="mx-auto" style="position: absolute; top: 15%; left: 0; width: 100%; font-size: 64px; font-style: italic">Footost</h2></a>
                    <h4 class="mx-auto" style="position: absolute; top: 50%; left: 0; width: 100%; font-size: 32px">Temukan Tempat yang Ada Disekitar Binus</h4>
                </div> 
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
