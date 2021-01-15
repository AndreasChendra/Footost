@extends('layouts.app')
@section('title', 'Membership - Footost')

@section('content')
    <div class="container mt-3">
        <div>
            <h1>Membership</h1>
        </div>
        <div class="pricing">
            <div class="row justify-content-center mt-4">
                @if (Auth::check())
                @else
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h3>Free</h3>
                            <h4><sup>Rp.</sup>0<span> / bulan</span></h4>
                            <ul>
                                <li>See information for nearby places</li>
                                <li>Got promo information</li>
                                <li>Register own store</li>
                                <li>Store can access all user</li>
                                <li class="na">Got discount voucher</li>
                                <li class="na">Got marchandise*</li>
                                <li class="na">Promote store</li>
                                <li class="na">Make a store promotion</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="/register">
                                    <button type="submit" class="btn-buy">Join Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                @foreach ($memberships as $m)
                    <div class="col-lg-4 col-md-6 pb-5">
                        <div class="box">
                            <h3>{{ $m->name }}</h3>
                            @if ($m->name == 'Expert')
                                <span class="advanced">Best Seller</span>
                            @endif

                            <h4><sup>Rp.</sup>{{ $m->price }}<span> / {{ $m->duration }} Month</span></h4>
                            <ul>
                                <li>See information for nearby places</li>
                                <li>Got promo information</li>
                                <li>Register own store</li>
                                <li>Store can access all user</li>
                                <li>Got discount voucher</li>
                                <li>Got marchandise*</li>
                                <li>Promote store</li>
                                <li>Make a store promotion</li>
                            </ul>
                            <div class="btn-wrap">
                                <form action="/pay" method="post">
                                    @csrf
                                    <div>
                                        <input type="hidden" value="{{ $m->id }}" name="id">
                                        <button type="submit" class="btn-buy">
                                            {{ __('Get Membership') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
