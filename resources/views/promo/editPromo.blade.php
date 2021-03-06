@extends('layouts.app')
@section('title', "Edit Promo - Footost")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Promo') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ url('/editedPromo') }}">
                        @csrf
                        <input id="id" type="hidden" value="{{old('id', $promos->id)}}" name="id">
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title', $promos->title)}}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" minlength="10" rows="5" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description', $promos->description)}}" required autocomplete="description" autofocus>{{old('description', $promos->description)}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="termncon" class="col-md-4 col-form-label text-md-right">{{ __('Terms & Conditions') }}</label>

                            <div class="col-md-6">
                                <textarea id="termncon" minlength="10" rows="5" class="form-control @error('termncon') is-invalid @enderror" name="termncon" value="{{old('termncon', $promos->termncon)}}" required autocomplete="termncon" autofocus>{{old('termncon', $promos->termncon)}}</textarea>
                                @error('termncon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                            <div class="col-md-6">
                                <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{old('end_date', $promos->end_date)}}" required autocomplete="end_date">

                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Promo') }}
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
