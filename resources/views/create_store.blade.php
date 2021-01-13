@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Store') }}</div>

                <div class="card-body">
                    {{-- Fill action with route --}}
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="store_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="store_name" type="text" class="form-control @error('store_name') is-invalid @enderror" name="store_name" value="{{ old('store_name') }}" required autocomplete="store_name" autofocus>

                                @error('store_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="store_desc" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="store_desc" minlength="10" rows="5" class="form-control @error('store_desc') is-invalid @enderror" name="store_desc" value="{{ old('store_desc') }}" required autocomplete="store_desc" autofocus></textarea>
                                @error('store_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="store_category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <input id="store_category" type="text" class="form-control @error('store_category') is-invalid @enderror" name="store_category" value="{{ old('store_category') }}" required autocomplete="store_category">

                                @error('store_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="store_address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="store_address" type="text" class="form-control @error('store_address') is-invalid @enderror" name="store_address" value="{{ old('store_address') }}" required autocomplete="store_address">

                                @error('store_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="store_pict" class="col-md-4 col-form-label text-md-right">{{ __('Store Picture') }}</label>

                            <div class="col-md-6">
                                <input id="store_pict" type="file" class="form-control-file @error('store_pict') is-invalid @enderror" name="store_pict" value="{{ old('store_pict') }}">

                                @error('store_pict')
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
