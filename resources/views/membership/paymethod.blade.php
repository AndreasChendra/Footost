@extends('layouts.app')
@section('title', 'Payment - Footost')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-offset">
            <div class="row">
                <div class="text-center pb-3">
                    <h1>Receipt</h1>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col" class="row justify-content-end">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><em>{{$memberships->name}}</em></td>
                            <td class="row justify-content-end">Rp {{$memberships->price}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="row justify-content-end text-danger"><h4><strong>Rp {{$memberships->price}}</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="/paymentSuccess" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="paymentCont">
                <div class="headingWrap">
                        <h3 class="headingTop text-center pt-2 pb-2">Select Your Payment Method</h3>	
                </div>
                <div class="paymentWrap">
                    <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                        @foreach ($payments as $p)
                            <label class="btn paymentMethod active">
                                <div class="method cc"></div>
                                <input type="radio" name="payment_id" value = {{$p->id}}>
                                <img src="{{$p->picture}}" alt="Payment Picture"  width="120px" height="60px">
                            </label>
                        @endforeach
                        @error('payment_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>     
                </div>
                <div class="row justify-content-center pt-3">
                    <input type="hidden" value={{$memberships->id}} name="membership_id">
                    <input type="hidden" value={{Auth::user()->id}} name="user_id">
                    <button type="submit" class= "btn btn-success btn-lg d-flex">
                        {{ __('Pay Now') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection