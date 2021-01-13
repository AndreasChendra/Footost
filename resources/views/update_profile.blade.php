@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-md-3 m-3">
                <img src="/images/profile.jpg" width=100% alt="">
            </div>
            <div class="col-md-7 m-3">
                <h1>Update Profile</h1>
                {{-- dummy output --}}
                <h3>Username</h3>
                {{-- <form method="post" action="/updateprofile/{{$user->id}}" enctype="multipart/form-data"> --}}
                <form method="post" action="/updateprofile/1" enctype="multipart/form-data">
                @csrf
        
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="username@footost.com">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" >

                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="img" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control-file">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                 
                <br>
                <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
                
            </div>
        </div>
        
    </div>
</div>
@endsection