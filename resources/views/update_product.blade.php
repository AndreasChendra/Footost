@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update product') }}</div>

                <div class="card-body">
                    {{-- Fill action with route --}}
                    {{-- dummy --}}
                    <h2>***Nama Product***</h2>
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                            <label for="product_desc" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="product_desc" minlength="10" rows="5" class="form-control @error('product_desc') is-invalid @enderror" name="product_desc" value="{{ old('product_desc') }}" required autocomplete="product_desc" autofocus></textarea>
                                @error('product_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="product_price" type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price" value="{{ old('product_price') }}" required autocomplete="product_price">

                                @error('product_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_pict" class="col-md-4 col-form-label text-md-right">{{ __('Product Picture') }}</label>

                            <div class="col-md-6">
                                <input id="product_pict" type="file" class="form-control-file @error('product_pict') is-invalid @enderror" name="product_pict" value="{{ old('product_pict') }}" multiple="multiple">

                                @error('product_pict')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <p class="pt-1">**you can add more than 1 file</p>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection