@extends('layouts.app')
@section('title', "$category->name")

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end mt-3 mb-3">
            <form class="d-flex">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" value="{{ Request::input('search') }}" aria-label="Search">
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
                            <a href="/kost/price/desc">Harga - tinggi ke rendah</a><br>
                            <a href="/kost/price/asc">Harga - rendah ke tinggi</a><br>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Filter</h4>
                            <a href="/kost/type/campur">Kost Campur</a><br>
                            <a href="/kost/type/putra">Kost Putra</a><br>
                            <a href="/kost/type/putri">Kost Putri</a><br>
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
                                    <a href=""></a>
                                    <h4 class="card-title">{{ $store->name }}</h4>
                                    <p class="card-text">Rating : 4.1 / 5</p>
                                    <p class="card-text">{{ $store->address }}</p>
                                    <p class="card-text">Tipe Kost : {{ $store->type }}</p>
                                    <p class="card-text">Harga : Rp. {{ $store->price }}/bulan</p>
                                    <p class="card-text text-muted">{{ $store->description }}</p>
                                </div>
                            </div>
                            <div class="d-grid mt-3 float-right">
                                <a href="/kost/detail/{{ $store->id }}" class="btn btn-success">Detail</a>
                            </div>
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
                <img src="{{asset('images/vertical-ads2.png')}}" width="100%" alt="">
            </div>
        </div>
        
    </div>
        
@endsection