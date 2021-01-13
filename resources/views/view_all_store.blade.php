@extends('layouts.app')

@section('content')
<div class="container">
    {{-- @foreach ($stores as $store) --}}
    {{-- dummy output --}}
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="{{asset('images/starbucks.jpg')}}" alt="Store Profile" width="300px" height="200px">
            </div>
            <div class="card-block px-2">
                {{-- <h2 class="card-title py-2">Store : Kostan Kita Bersama</h2>
                <p class="card-text">Store Owner : bapak A </p>
                <p class="card-text">Store Address : Jalan Raya asd</p>
                <p class="card-text">Store Category : Housing </p>
                <a href="" class="btn btn-dark m-3">See Store Detail</a> --}}

                <h2 class="card-title">Starbucks Coffee Binus</h2>
                <p class="card-text">Rating : 4.7 / 5</p>
                <p class="card-text">(Address)</p>
                <p class="card-text">Harga Rata-Rata : Rp 50.000</p>
                <p class="card-text">Jam Operasional : 07.00-20.00 (Sen-Sab)</p>
                <a href="{{url('/store-detail')}}" class="btn btn-dark m-3">Detail</a>
            </div>
        </div>
    {{-- @endforeach --}}
    

</div>
    
@endsection