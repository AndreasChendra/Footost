@extends('layouts.app')
@section('title', 'View All User - Footost')

@section('content')
    <div class="container">
        <div class="container pt-5 pl-5 pr-5">
            <div>
                <h1>All User</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 justify-content-center">

                @foreach ($users as $user)
                    <div class="col-md-4">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">User ID : {{$user->id}}</div>
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

        <div class="row justify-content-center pt-5 pb-4">
            <div class="div col-md-2">
                {{ $users->links() }}
            </div>
        </div>

    </div>
@endsection