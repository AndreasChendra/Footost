@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- @foreach ($collection as $item) --}}
        {{-- dummy --}}
        @for ($i = 0; $i < 3; $i++)
            <div class="col-md-auto">
                <div class="card m-4 p-2" style="width: 18rem;">
                    <a href=""><img class="card-img-top" src="/images/makanan-berat.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                    <a href=""><p class="card-title" style="font-size: 20px; color: black">Nasi Padang</p></a>
                    <p class="card-text">Shop Name : Sederhana</p>
                    <p class="card-text">Rating : 8/10</p>
                    <p class="card-text">Location : jalan raya</p>
                    <p class="card-text">Price : Rp. 123</p>
                    <a href="" class="btn btn-dark m-3">Update</a>
                    <a href="" class="btn btn-dark m-3">Delete</a>
                    </div>
                </div>
            </div>    
        @endfor
        {{-- @endforeach --}}
    </div>
</div>
    
@endsection