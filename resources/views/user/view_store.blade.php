@extends('layouts.app')
@section('title', 'My Store - Footost')

@section('content')
    @if (empty($stores) || count($stores) == 0)
        <div class="container position-empty">
            <div class="alert alert-danger pt-5 pb-5" role="alert">
                <strong>{{ Auth::user()->name }} Don't Have a Store!</strong>
            </div>
            <div>
                <a href="/create/store" style="font-size: 18px">
                    <button type="button" class="btn btn-lg btn-success">
                    Create Own Store
                    </button>
                </a>
            </div>
        </div>
    @else
        <div class="container">
            <h1 class="text-center mt-4 mb-4">My Store</h1>
            @foreach ($stores as $store)
                <div class="card mb-4">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <div class="card-header border-0">
                                <img src="{{ asset($store->picture) }}" alt="Store Profile" width="300px" height="200px">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-block px-2">
                                <h2 class="card-title">{{ $store->name }}</h2>
                                <p class="card-text">Rating : {{ number_format($store->review->avg('rating')) }} / 5</p>
                                <p class="card-text">Address : {{ $store->address }}</p>
                                <p class="card-text">Price : {{ $store->price }}</p>
                                <p class="card-text">{{ $store->description }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-right">
                                <a href="/mystore/update/{{ $store->id }}" class="btn btn-warning m-3">Update</a>
                                <form method="POST" action="/mystore/delete/{{ $store->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger m-3">Delete</button>
                                </form>
                                <a href="/mystore/detail/{{ $store->id }}" class="btn btn-dark m-3">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    @endif
@endsection