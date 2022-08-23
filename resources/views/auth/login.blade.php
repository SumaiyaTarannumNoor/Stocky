
@extends('layouts.master')


@section('content')
<body style="background-image: url('{{ asset('img/background.jpg')}}'); ">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">
                <div class="card-header" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">{{ __('Login') }}</div>

                <div class="card-body" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px; font-size: 28px; color: blueviolet; margin: 10px; margin-right: 30px; font-size: 20px; margin-bottom: 5px; color: blueviolet; font-weight: 400">
                    <form method="POST" action="{{ route('login') }}" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">
                        @csrf
                        
                        <div class = "form-group row">
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-danger btn-block" style="text-align:center; background-color:green; width: 200px">Login with Google</a>
                            </div>
                            <div class="d-flex justify-content-center">    
                                <a href="" class="btn btn-primary btn-block" style="text-align:center; width: 200px">Login with Facebook</a>
                            </div>
                        </div>
                        <p style="text-align: center">OR</p>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
