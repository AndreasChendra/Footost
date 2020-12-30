<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Footost</title>
</head>
<body>
    <div class="text-center">
        <div class="bannertext">
            <img class="bgbanner" src="/images/banner.jpg" alt="banner">
            <a class="mx-3 my-4" href="{{ route('register') }}" style="position: absolute; top: 20px; right: 16px;"><span class="bannertext" style="font-size: 18px">Register</span></a>
            <a class="mx-3 my-4" href="{{ route('login') }}" style="position: absolute; top: 20px; right: 112px;"><span class="bannertext" style="font-size: 18px">Login</span></a>
            <h2 class="mx-auto" style="position: absolute; top: 15%; left: 0; width: 100%; font-size: 64px; font-style: italic">Footost</h2>
            <h4 class="mx-auto" style="position: absolute; top: 30%; left: 0; width: 100%; font-size: 32px">Temukan Tempat yang Ada Disekitar Binus</h4>
        </div> 
    </div>
    <div class="container">
        <div class="card-group border-warning row justify-content-center my-5 p-3">
            <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
                <a class="card-link" href="">
                <img class="card-img bgbanner" src="/images/fnb.jpg" alt="makanan dan minuman" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 15%; width: 100%; font-size: 20px">Makanan & Minuman</p>
                </a>
            </div>
            <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
                <a class="card-link" href="">
                <img class="card-img bgbanner" src="/images/kostan.jpg" alt="kostan" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 35%; width: 100%; font-size: 20px">Kostan</p>
                </a>
            </div>
            <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
                <a class="card-link" href="">
                <img class="card-img bgbanner" src="/images/atk.jpg" alt="atk" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 25%; width: 100%; font-size: 20px">Alat Tulis Kantor</p>
                </a>
            </div>
            <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
                <a class="card-link" href="">
                <img class="card-img bgbanner" src="/images/toserba.jpg" alt="toserba" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 35%; width: 100%; font-size: 20px">Toserba</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>