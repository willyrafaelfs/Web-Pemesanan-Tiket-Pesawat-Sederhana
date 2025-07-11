@extends('layouts.page_login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 75vh;">
    <div class="card-body">
        <h2 class="text-center mb-5">Daftar Sekarang</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-2 justify-content-center">
                <div class="col-md-6">
                    <label for="name" class="md-2 mb-2">{{ __('Username') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border-radius: 50px; height:60px" placeholder="Username">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2 justify-content-center">
                <div class="col-md-6">
                    <label for="email" class="md-2 mb-2">{{ __('Alamat E-Mail') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border-radius: 50px; height:60px" placeholder="example@email.com">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2 justify-content-center">
                <div class="col-md-6">
                    <label for="password" class="md-2 mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="border-radius: 50px; height:60px" placeholder="********">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-5 justify-content-center">
                <div class="col-md-6">
                    <label for="password-confirm" class="md-2 mb-2">{{ __('Konfirmasi Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="border-radius: 50px; height:60px" placeholder="********">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary w-100 w-md-auto" style="border-radius: 50px; height:60px; width: 100px;">
                        {{ __('Daftar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
