@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{url('add-store/')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-3  text-md-right">{{ __('Store Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Masukkan Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-3  text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" placeholder="Masukkan Alamat" class="form-control @error('name') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-sm-3  text-md-right">{{ __('Average Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" placeholder="Masukkan Harga Rata-Rata (dalam Rupiah)" class="form-control @error('name') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="operational" class="col-sm-3  text-md-right">{{ __('Operational Hours') }}</label>

                            <div class="col-md-6">
                                <input id="operational" type="text" placeholder="Masukkan Jam Operasional" class="form-control @error('name') is-invalid @enderror" name="operational" value="{{ old('operational') }}" required autocomplete="operational" autofocus>

                                @error('operational')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-sm-3  text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" placeholder="Masukkan No. Kontak" class="form-control @error('name') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                                @error('contact')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 text-md-right">
                                <label class="" for="exampleFormControlFile1">Select Picture</label>
                                <input class="col-md-6 text-md-right "type="file" id="image" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <br>

                        <div class="form-group offset-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Add Store') }}
                            </button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
