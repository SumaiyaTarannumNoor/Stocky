@extends('layouts.master')


@section('content')
<body style="background-image: url('{{ asset('img/background.jpg')}}'); ">
<div class="container" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">
                <div class="card-header" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">{{ __('Dashboard') }}</div>

                <div class="card-body" style = "border: border-box; border-radius: 5px; background-color: rgba(233, 54, 122, 0.4); margin: 10px 0; padding: 12px 6px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
