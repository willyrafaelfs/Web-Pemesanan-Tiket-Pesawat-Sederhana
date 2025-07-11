@extends('layouts.page_login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 75vh;">
    <div class="card-body" >
        <h2 class="text-center mb-5">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-5 justify-content-center">
                <div class="col-md-6">
                    <label for="email" class="md-2 mb-3">{{ __('Alamat E-Mail') }}</label>
                    <div class="form-floating">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="user@email.com" style="border-radius: 50px; height:60px">
                        <label for="email" class="md-2 mb-3">{{ __('E-Mail') }}</label>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-5 justify-content-center">
                <div class="col-md-6">
                    <label for="password" class="md-2 mb-3">{{ __('Password') }}</label>
                    <div class="position-relative">
                        <div class="form-floating">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password"
                                placeholder="********"
                                style="border-radius: 50px; height:60px; padding-right: 40px;">
                            <span class="position-absolute top-50 end-0 translate-middle-y pe-3"
                                style="cursor: pointer;"
                                onclick="togglePassword()">
                                <i class="fas fa-eye-slash" id="togglePasswordIcon" style="color: rgb(195, 195, 195)"></i>
                            </span>
                            <label for="password" class="md-2 mb-3">{{ __('Password') }}</label>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

           <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check m-0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Ingat Saya') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary w-100 w-md-auto" style="border-radius: 50px; height:60px; width: 100px;">
                        {{ __('Masuk') }}
                    </button>
                </div>
            </div>

            @if (Route::has('register'))
                <div class="row mb-3 justify-content-between">
                    <div class="col-md-6 offset-md-3">
                        <p class="text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none text-primary">{{ __('Daftar Sekarang') }}</a></p>
                    </div>
                </div>
            @endif
        </form>
    </div>
    @section('scripts')
    <script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePasswordIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        }
    }
    </script>
    @endsection
</div>
@endsection
