<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Ayo Pergi - Mau Kemana Hari Ini?</title>
    <link rel="icon" type="image/x-icon" href="/aset/favicon.png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <img src="/aset/logoo.png" alt="Logo" style="width: 150px; height: 85px; margin-right: 10px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home') }}">{{ __('Beranda') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">{{ __('Tentang Kami') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">{{ __('Kontak Kami') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                            {{-- Keranjang DropDown --}}
                            <a id="navbarDropdown" class="nav-link" href="keranjang" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ Auth::user()->profile_image ?? '/aset/keranjang.png' }}" alt="Keranjang" class="rounded-circle" style="width: 35px; height: 35px; margin-right: 10px;">
                            </a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ Auth::user()->profile_image ?? '/aset/profile-icon.png' }}" alt="Profile" class="rounded-circle" style="width: 32px; height: 32px;">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <p class="dropdown-header fs-6 text-muted">{{ Auth::user()->name }}</p>
                                    <a class="dropdown-item fs-6" href="{{ route('home_admin') }}">Beralih ke Admin</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
