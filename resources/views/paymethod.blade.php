@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-offset">
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                {{-- <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th></th>
                            <th></th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Anggota</em></h4></td>
                            <td></td>
                            <td></td>
                            <td class="col-md-2 text-center">Rp 150.000</td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>Rp 150.000</strong></h4></td>
                        </tr>
                    </tbody>
                </table> --}}
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col" class="row justify-content-end">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><em>Anggota</em></td>
                        <td class="row justify-content-end">Rp 150.000</td>
                      </tr>
                      <tr>
                        <td class="text-right"><h4><strong>Total: </strong></h4></td>
                        <td class="row justify-content-end text-danger"><h4><strong>Rp 150.000</strong></h4></td>
                    </tr>
                    </tbody>
                  </table>
                {{-- <button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td> --}}
            </div>
        </div>
    </div>

	<div class="row justify-content-center">
		<div class="paymentCont">
            <div class="headingWrap">
                    <h3 class="headingTop text-center">Select Your Payment Method</h3>	
            </div>
            <div class="paymentWrap">
                <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                    <label class="btn paymentMethod active">
                        <div class="method cc"></div>
                        <input type="radio" name="options" checked> 
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method gopay"></div>
                        <input type="radio" name="options"> 
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method ovo"></div>
                        <input type="radio" name="options">
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method dana"></div>
                        <input type="radio" name="options">
                    </label>
                        <label class="btn paymentMethod">
                        <div class="method linkaja"></div>
                        <input type="radio" name="options"> 
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method bank"></div>
                        <input type="radio" name="options"> 
                    </label>
                    
                </div>        
            </div>
            <div>
                <a href="{{url('/')}}" class="btn btn-success btn-lg d-flex justify-content-center">Pay Now<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
		
	</div>
</div>
@endsection