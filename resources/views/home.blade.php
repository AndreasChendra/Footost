@extends('layouts.master')
@section('title', 'Footost')

@section('content')
<div class="container">
    <div class="card-group border-warning row justify-content-center p-3">
        <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
            <a class="card-link" href="/food">
                <img class="card-img bgbanner" src="/images/fnb.jpg" alt="makanan dan minuman" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 15%; width: 100%; font-size: 20px">Makanan & Minuman</p>
            </a>
        </div>
        <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
            <a class="card-link" href="/kost">
                <img class="card-img bgbanner" src="/images/kostan.jpg" alt="kostan" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 35%; width: 100%; font-size: 20px">Kostan</p>
            </a>
        </div>
        <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
            <a class="card-link" href="/atk">
                <img class="card-img bgbanner" src="/images/atk.jpg" alt="atk" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 25%; width: 100%; font-size: 20px">Alat Tulis Kantor</p>
            </a>
        </div>
        <div class="card border-0 col-3 my-3" style="width: 20rem; height: 20rem;">
            <a class="card-link" href="/toserba">
                <img class="card-img bgbanner" src="/images/toserba.jpg" alt="toserba" width="100%" height="100%" style="border-radius: 25px">
                <p class="text-white" style="position: absolute; bottom: 1%; left: 35%; width: 100%; font-size: 20px">Toserba</p>
            </a>
        </div>
    </div>
</div>
@endsection
