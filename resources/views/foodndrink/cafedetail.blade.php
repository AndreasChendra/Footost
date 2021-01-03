@extends('layouts.app')
@section('title', 'Cafe Detail')

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-2">
        <div class="col">
            <img src="{{asset('images/fnb/starbucks.jpg')}}" width="100%" height="500">
        </div>
        <div class="col">
            <div class="row row-cols-2">
                <div class="col"><h3>Starbucks Coffee Binus</h3></div>
                <div class="col text-end"><p>Rating : 4.7 / 5</p></div>
            </div>
            <div>
                <p>(Address)</p>
                <p>Harga Rata-Rata : Rp 50.000</p>
                <p>Jam Operasional : 07.00-20.00 (Sen-Sab)</p>
            </div>
            <div class="mt-3">
                <p>
                    <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#collapseUlasan" role="button" aria-expanded="false" aria-controls="collapseUlasan">
                        Ulasan
                    </a>
                    <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#collapseFoto" role="button" aria-expanded="false" aria-controls="collapseFoto">
                        Foto
                    </a>
                    {{-- <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFoto" aria-expanded="false" aria-controls="collapseFoto">
                        Foto
                    </button> --}}
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
                            <img src="{{asset('images/starbucks.jpg')}}" width="100%">
                        {{-- @endforeach --}}
                    </div>
                  </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection