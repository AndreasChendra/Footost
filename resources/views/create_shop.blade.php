@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Shop') }}</div>

                <div class="card-body">
                    {{-- Fill action with route --}}
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="shop_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="shop_name" type="text" class="form-control @error('shop_name') is-invalid @enderror" name="shop_name" value="{{ old('shop_name') }}" required autocomplete="shop_name" autofocus>

                                @error('shop_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="shop_desc" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="shop_desc" minlength="10" rows="5" class="form-control @error('shop_desc') is-invalid @enderror" name="shop_desc" value="{{ old('shop_desc') }}" required autocomplete="shop_desc" autofocus></textarea>
                                @error('shop_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="shop_category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <input id="shop_category" type="text" class="form-control @error('shop_category') is-invalid @enderror" name="shop_category" value="{{ old('shop_category') }}" required autocomplete="shop_category">

                                @error('shop_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="shop_pict" class="col-md-4 col-form-label text-md-right">{{ __('Shop Picture') }}</label>

                            <div class="col-md-6">
                                <input id="shop_pict" type="file" class="form-control-file @error('shop_pict') is-invalid @enderror" name="shop_pict" value="{{ old('shop_pict') }}">

                                @error('shop_pict')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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
