@extends('layouts.app')
@section('title', 'Makanan & Minuman - Footost')

@section('content')
    <div class="container">
        <div>
            <h1 class="text-center mt-4">Makanan & Minuman</h1>
        </div>

        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/banner/cyber-monday.png') }}" class="d-block w-100" height="555" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner/order-banner.png') }}" class="d-block w-100" height="555" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner/mega-sale.png') }}" class="d-block w-100" height="550" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col" style="border-radius: 20px">
                <a href="/cafe">
                    <div class="card text-white mt-4 mb-4">
                        <img src="{{ asset('images/app/cafe.jpg') }}" class="card-img-top" height="350"
                            style="border-radius: 20px" alt="cafe">
                        <div class="card-img-overlay">
                            <h1 class="card-title h-100 d-flex flex-column justify-content-center text-center">Cafe</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col" style="border-radius: 20px">
                <a href="/makanan">
                    <div class="card text-white mt-4 mb-4">
                        <img src="{{ asset('images/app/makanan-berat.jpg') }}" class="card-img-top" height="350"
                            style="border-radius: 20px" alt="food">
                        <div class="card-img-overlay">
                            <h1 class="card-title h-100 d-flex flex-column justify-content-center text-center">Makanan Berat</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
