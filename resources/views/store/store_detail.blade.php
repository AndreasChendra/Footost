@extends('layouts.app')
@section('title', "$category->name Detail")

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-2">
        <div class="col">
            <img src="{{ asset($stores->picture) }}" width="100%" height="500">
        </div>
        <div class="col">
            <div class="row row-cols-2">
                <div class="col"><h3>{{ $stores->name }}</h3></div>
                <div class="col text-end"><p>Rating : 4.1 / 5</p></div>
            </div>
            <div>
                <p class="card-text">{{ $stores->address }}</p>
                <p class="card-text">Tipe Kost : {{ $stores->type }}</p>
                <p class="card-text">Harga : Rp. {{ $stores->price }}/bulan</p>
                <p class="card-text">Fasilitas : {{ $stores->description }}</p>
            </div>
            <div class="mt-3">
                <p>
                    <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#collapseUlasan" role="button" aria-expanded="false" aria-controls="collapseUlasan">
                        Ulasan
                    </a>
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFoto" aria-expanded="false" aria-controls="collapseFoto">
                        Foto
                    </button>
                  </p>
                  <div class="collapse" id="collapseUlasan">
                      {{-- @foreach ($collection as $item) --}}
                        <div class="card card-body">
                            <div class="row row-cols-2">
                                <div class="col"><p><b>Mbak Novi</b></p></div>
                                <div class="col text-end"><p>Rating : 4 / 5</p></div>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis maxime nostrum explicabo facere ad ipsum excepturi. Deleniti sunt quasi fugiat soluta ad laudantium! Nihil delectus provident asperiores iure accusamus explicabo?</p>
                        </div>
                      {{-- @endforeach --}}
                  </div>
                  <div class="collapse" id="collapseFoto">
                    <div class="row row-cols-2">
                        {{-- @foreach ($collection as $item) --}}
                            <img src="{{asset('images/kos1.jpg')}}" width="100%">
                        {{-- @endforeach --}}
                    </div>
                  </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection