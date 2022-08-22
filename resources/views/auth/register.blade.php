
@extends('layouts.master')


@section('content')
<body style="background-image: url('{{ asset('img/background.jpg')}}'); ">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">
                <div class="card-header" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">{{ __('Register') }}</div>

                <div class="card-body" style = "font-size: 28px; color: blueviolet; margin: 10px; margin-right: 30px; font-size: 20px; margin-bottom: 5px; color: violet; font-weight: 600">
                    <form method="POST" action="{{ route('register') }}" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<body>
@endsection
