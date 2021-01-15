@extends('layouts.app')
@section('title', 'My Store Detail - Footost')

@section('content')
<div class="pt-4">
    <div class="container mt-5 mb-5" style="background-color: rgb(233, 233, 233);">
        <div class="container pt-4 pl-2 pr-2 pb-4">
            <div class="row">
                <div class="col">
                    <div class="card-group">
    
                        <div class="card">
                            <img src="{{ asset($stores->picture) }}" class="card-img-top" alt="Store Picture">
                        </div>
    
                    </div>
                </div>
                <div class="col pizza-detail font-style">

                    <h2>{{ $stores->name }}</h2>
                    <p class="font-weight-bold my-3" style="color: goldenrod">Rating : 4.7 / 5</p>
                    <p>{{ $stores->address }}</p>
                    <p>Harga : Rp {{ $stores->price }}</p>
                    <p>{{ $stores->description }}</p>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection