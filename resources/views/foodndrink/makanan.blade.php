@extends('layouts.app')
@section('title', 'Makanan Berat')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end mt-3 mb-3">
            <form class="d-flex" action="/search" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
        <div>
            <h1 class="text-center mt-4">Makanan Berat</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="store-filter">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Urutkan</h4>
                        <a class="a-filter" href="">Popularitas</a><br>
                        <a class="a-filter" href="">Rating - tinggi ke rendah</a><br>
                        <a class="a-filter" href="">Rating - rendah ke tinggi</a><br>
                        <a class="a-filter" href="">Harga - tinggi ke rendah</a><br>
                        <a class="a-filter" href="">Harga - rendah ke tinggi</a><br>
                        <a class="a-filter" href="">Baru terdaftar</a><br>
                    </div>
                </div>
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
                                    <h4 class="card-title">{{ $store->name }}</h4>
                                    <p class="card-text">Rating : 4.7 / 5</p>
                                    <p class="card-text">{{ $store->address }}</p>
                                    <p class="card-text">Harga Rata-Rata : Rp {{ $store->price }}</p>
                                    <p class="card-text">Jam Operasional : {{ $store->description }} (Sen-Sab)</p>
                                </div>
                            </div>
                            <div class="d-grid mt-3 float-right">
                                <a href="/food/cafe/detail/{{ $store->id }}" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>

            <div class="col">
                <img src="{{asset('images/vertical-ads2.png')}}" width="100%" alt="">
            </div>
        </div>
        
    </div>
        
@endsection