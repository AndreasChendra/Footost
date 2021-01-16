@extends('layouts.app')
@section('title', "$category->name Detail - Footost")

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-2">
            <div class="col">
                <img src="{{ asset($stores->picture) }}" width="100%" height="500">
            </div>
            <div class="col">
                <div class="row row-cols-2">
                    <div class="col"><h3>{{ $stores->name }}</h3></div>
                    <div class="col text-end"><p>Rating : {{ number_format($stores->review->avg('rating')) }} / 5</p></div>
                </div>
                <div>
                    <p class="card-text">{{ $stores->address }}</p>
                    <p class="card-text">Tipe Kost : {{ $stores->type }}</p>
                    <p class="card-text">Harga : Rp. {{ $stores->price }}/bulan</p>
                    @if ($category->name == 'Cafe')
                        <p class="card-text">Jam Operasional : {{ $stores->description }} (Senin - Sabtu)</p>
                    @elseif ($category->name == 'Kost')
                        <p class="card-text">Fasilitas : {{ $stores->description }}</p>
                    @else
                        <p class="card-text">Description : {{ $stores->description }}</p>
                    @endif
                </div>
                <div class="mt-3">
                    <p>
                        <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="/review/{{ $stores->id }}" role="button" aria-expanded="false" aria-controls="collapseUlasan">
                            View All Review
                        </a>
                        <a class="btn btn-outline-secondary float-right" href="/feedback/{{ $stores->id }}">
                            Send Feedback
                        </a>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
@endsection