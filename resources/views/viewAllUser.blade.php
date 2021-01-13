@extends('layouts.app')
@section('title', 'View All User - Footost')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach ($users as $user)
        <div class="col-md-3">
            <div class="card text-white bg-dark">

                <div class="card-header">User ID : {{ $user->id }}</div>
                    <div class="card-body bg-light text-dark">
                        <p class="card-text">Name : {{ $user->name }}</p>
                        <p class="card-text">Email : {{ $user->email }}</p>
                        <p class="card-text">Place of Birth: {{ $user->place_of_birth }}</p>
                        <p class="card-text">Date of Birth: {{ $user->date_of_birth }}</p>
                        <p class="card-text">Phone Number : {{ $user->phone_number }}</p>
                        <p class="card-text">Gender : {{ $user->gender }}</p>
                        <p class="card-text">VIP Expired: {{ $user->vip_expired }}</p>
                </div>

            </div>
        </div>
        @endforeach
    
    </div>
</div>
@endsection