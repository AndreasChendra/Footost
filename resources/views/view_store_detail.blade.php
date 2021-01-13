@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card flex-row flex-wrap">
        <div class="card-header border-0">
            {{-- dummy --}}
            <img class="card-img-top" src="{{asset('images/starbucks.jpg')}}" alt="Store profile">
        </div>
        <div class="card-block px-2">
            {{-- dummy --}}
            {{-- <h2 class="card-title py-2">Store : Kostan Kita Bersama</h2>
            <h5 class="card-text font-weight-bold my-3" style="color: goldenrod">Rating : 8/10</h5>
            <p class="card-text">Store Description : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aspernatur accusantium eum totam! Aliquid odio quam nihil quisquam, ab recusandae perferendis ad, illum, fuga hic et ducimus est itaque tempora?</p>
            <p class="card-text">Store Owner : bapak A </p>
            <p class="card-text">Store Address : Jalan Raya asd</p>
            <p class="card-text">Store Category : Housing </p> --}}

            <h2>Starbucks Coffee Binus</h2>
            <p class="font-weight-bold my-3" style="color: goldenrod">Rating : 4.7 / 5</p>
            <p>(Address)</p>
            <p>Harga Rata-Rata : Rp 50.000</p>
            <p>Jam Operasional : 07.00-20.00 (Sen-Sab)</p>
            <p>Contact : 081234567890</p>

            <a href="{{url('/store-update')}}" class="btn btn-dark m-3">Update</a>
            <a href="" class="btn btn-dark m-3">Delete</a>
        </div>
    </div>
</div>
@endsection