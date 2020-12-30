@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1  class="text-center">Profile</h1>
            <div class="row  justify-content-center">
                <div class="card pt-4" style="width: 50rem">
                    <div class="row px-5 ml-3">
                        <div class="col-md-4">
                            <img src="/images/profile.jpg" alt="" width="100px" height="100px" style="border-radius: 50%">
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">User1</p>
                        </div>
                        <div class="col-md-4 mt-4">
                           <a href="" style="font-size: 18px">Change</a>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Tempat, Tanggal Lahir</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Jakarta, 1 Januari 2000</p>
                        </div>
                        <div class="col-md-4 mt-4">
                           <a href="" style="font-size: 18px">Change</a>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Email</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">user1@email.com</p>
                        </div>
                        <div class="col-md-4 mt-4">
                           <a href="" style="font-size: 18px">Change</a>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">No. HP</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">08123456789</p>
                        </div>
                        <div class="col-md-4 mt-4">
                           <a href="" style="font-size: 18px">Change</a>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Password</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">*********</p>
                        </div>
                        <div class="col-md-4 mt-4">
                           <a href="" style="font-size: 18px">Change</a>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Gender</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Male</p>
                        </div>
                    </div>
                    <div class="row px-5 ml-4">
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Status</p>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p style="font-size: 18px">Membership</p>
                        </div>
                    </div>                                       
                </div>
            </div>
        </div>

    </div>
@endsection