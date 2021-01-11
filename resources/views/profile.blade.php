@extends('layouts.app')
@section('title', 'Profile')

@section('content')
    <div class="container">
        <div>
            <h1  class="text-center">Profile</h1>
            <a href="" style="font-size: 18px">Change Password</a>
            <br>
            <a href="/createshop" style="font-size: 18px">Create Own Store</a>
            <div class="row  justify-content-center">
                <div class="card pt-4" style="width: 50rem">
                    <div class="row px-5 ml-3">
                        <div class="col-md-4">
                            <img src="/images/{{Auth::user()->img_profile}}" alt="" width="100px" height="100px" style="border-radius: 50%">
                        </div>
                        <div class="col-md-4 mt-4">
                            <strong><p style="font-size: 25px">{{Auth::user()->name}}</p></strong>
                        </div>
                        <div class="col-md-4 mt-4">
                           <a href="/updateProfile" style="font-size: 18px">Update Profile</a>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Place and Date of Birth</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">{{Auth::user()->place_of_birth}}, {{date('d-m-Y', strtotime(Auth::user()->date_of_birth))}}</p>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Email</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">{{Auth::user()->email}}</p>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Phone</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">{{Auth::user()->phone_number}}</p>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Gender</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">{{Auth::user()->gender}}</p>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Status</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            @if (Auth::user()->vip_expired > $nowtime)
                            <p style="font-size: 18px">VIP</p>
                            <p style="font-size: 15px">Until {{date('d-m-Y', strtotime(Auth::user()->vip_expired))}}</p>
                            @else
                            <p style="font-size: 18px">Membership</p>
                            @endif
                        </div>
                    </div>                                       
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            @if (session('alert'))
                            <div class="alert alert-success">
                                {{ session('alert') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection