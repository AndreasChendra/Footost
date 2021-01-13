@extends('layouts.app')
@section('title', "$category->name - Footost")

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end mt-3 mb-3">
            <form class="d-flex" action="/search/{{ $category->id }}" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" value="{{ old('search') }}" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
        <div>
            <h1 class="text-center mt-4">{{ $category->name }}</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="store-filter">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Urutkan</h4>
                            <a href="#">Popularitas</a><br>
                            <a href="#">Rating - tinggi ke rendah</a><br>
                            <a href="#">Rating - rendah ke tinggi</a><br>
                            @if (str_contains($category->name, ' '))
                                <a href="/{{ strtolower(str_slug($category->name, '/')) }}/price/desc">Harga - tinggi ke rendah</a><br>
                                <a href="/{{ strtolower(str_slug($category->name, '/')) }}/price/asc">Harga - rendah ke tinggi</a><br>
                            @else
                                <a href="/{{ strtolower($category->name) }}/price/desc">Harga - tinggi ke rendah</a><br>
                                <a href="/{{ strtolower($category->name) }}/price/asc">Harga - rendah ke tinggi</a><br>
                            @endif
                        </div>
                    </div>
                    @if ($category->name == 'Kost')
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Filter</h4>
                                <a href="/kost/type/campur">Kost Campur</a><br>
                                <a href="/kost/type/putra">Kost Putra</a><br>
                                <a href="/kost/type/putri">Kost Putri</a><br>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-6">
                @foreach ($stores as $store)
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="card-body">
                            <div class="row g-5">
                                <div class="col-md-4">
                                    <img src="{{ asset($store->picture) }}" width="200" height="150" alt="...">
                                </div>
                                <div class="col-md-8 px-5">
                                    <a href=""></a>
                                    <h4 class="card-title">{{ $store->name }}</h4>
                                    <p class="card-text">Rating : 4.1 / 5</p>
                                    <p class="card-text">Address : {{ $store->address }}</p>
                                    @if ($category->name == 'Kost')
                                        <p class="card-text">Tipe Kost : {{ $store->type }}</p>
                                        <p class="card-text">Harga : Rp. {{ $store->price }} / bulan</p>
                                    @endif
                                    @if ($category->name == 'Makanan Berat' 
                                            || $category->name == 'Alat Tulis Kantor'
                                            || $category->name == 'Toserba')
                                        <p class="card-text">Harga : Rp. {{ $store->price }}</p>
                                    @endif
                                    @if ($category->name == 'Cafe')  
                                        <p class="card-text">Harga rata-rata : Rp. {{ $store->price }}</p>
                                        <p class="card-text">Jam Operasional : {{ $store->description }}
                                            <br>
                                            (Senin - Sabtu)
                                        </p>
                                    @else
                                        <p class="card-text text-muted">{{ $store->description }}</p>
                                    @endif
                                </div>
                            </div>

                            @if (str_contains($category->name, ' '))
                                <div class="d-grid mt-3 float-right">
                                    <a href="/{{ strtolower(str_slug($category->name, '/')) }}/detail/{{ $store->id }}" class="btn btn-success">Detail</a>
                                </div>
                            @else
                                <div class="d-grid mt-3 float-right">
                                    <a href="/{{ strtolower($category->name) }}/detail/{{ $store->id }}" class="btn btn-success">Detail</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

                @if (Request::getPathInfo() == '/kost' || 
                Request::getPathInfo() == '/kost/type/campur' || 
                Request::getPathInfo() == '/kost/price/desc' || 
                Request::getPathInfo() == '/kost/price/asc')
                    <div class="row justify-content-center">
                        {{ $stores->links() }}
                    </div>
                @endif
            </div>

            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('images/advertisement/burgerking-ads.png')}}" alt="Ads BurgerKing">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/advertisement/lucio-ads.png')}}" alt="Ads Lucio">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/advertisement/mcd-ads.jpg')}}" alt="Ads MCD">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
        
@endsection