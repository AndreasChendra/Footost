@extends('layouts.app')
@section('title', 'Kost')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end mt-3 mb-3">
            <form class="d-flex" action="/search" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
        <div>
            <h1 class="text-center mt-4">Kostan</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="store-filter">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Urutkan</h4>
                        <a href="">Popularitas</a><br>
                        <a href="">Rating - tinggi ke rendah</a><br>
                        <a href="">Rating - rendah ke tinggi</a><br>
                        <a href="">Harga - tinggi ke rendah</a><br>
                        <a href="">Harga - rendah ke tinggi</a><br>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Filter</h4>
                        <a href="">Kost Campur</a><br>
                        <a href="">Kost Putra</a><br>
                        <a href="">Kost Putri</a><br>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-6">
                {{-- @foreach ($collection as $item) --}}
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="card-body">
                            <div class="row g-5">
                                <div class="col-md-4">
                                    <img src="{{asset('images/kos1.jpg')}}" width="200" height="150" alt="...">
                                </div>
                                <div class="col-md-8 px-5">
                                    <a href=""></a>
                                    <h4 class="card-title">Kost Square VIP Residence</h4>
                                    <p class="card-text">Rating : 4.1 / 5</p>
                                    <p class="card-text">(Address)</p>
                                    <p class="card-text">Tipe Kost : Campur</p>
                                    <p class="card-text">Harga : Rp. 2.000.000/bulan</p>
                                    <p class="card-text text-muted">-kamar mandi dalam -akses 24 jam -wifi</p>
                                </div>
                            </div>
                            <div class="d-grid mt-3">
                                <a href="/kost/detail" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div>
                {{-- @endforeach --}}
                
            </div>

            <div class="col">
                <img src="{{asset('images/vertical-ads2.png')}}" width="100%" alt="">
            </div>
        </div>
        
    </div>
        
@endsection