@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card flex-row flex-wrap">
        <div class="card-header border-0">
            {{-- dummy --}}
            <div class="text-center">
                <img class="mx-auto" src="/images/makanan-berat.jpg" alt="">
            </div>
        <div class="card-block px-2">
            {{-- dummy --}}
            <h2 class="card-title py-2">Nasi Padang</h2>
            <h5 class="card-text font-weight-bold my-3" style="color: goldenrod">Rating : 8/10</h5>
            <h5 class="card-text my-4">Price : Rp.123</h5>
            <p class="card-text">Description : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aspernatur accusantium eum totam! Aliquid odio quam nihil quisquam, ab recusandae perferendis ad, illum, fuga hic et ducimus est itaque tempora?</p>
            <p class="card-text">Owner : bapak A </p>
            <p class="card-text">Address : Jalan Raya asd</p>
        </div>
    </div>
</div>
@endsection