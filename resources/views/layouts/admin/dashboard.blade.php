<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} Comics</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!--  Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <a class="navbar-brand" href="#">Characters</a>
                    <a class="navbar-brand" href="{{ route('comics.index') }}">Comics</a>
                    <a class="navbar-brand" href="#">Movies</a>
                    <a class="navbar-brand" href="#">TV</a>
                    <a class="navbar-brand" href="#">Games</a>
                    <a class="navbar-brand" href="#">Videos</a>
                    <a class="navbar-brand" href="#">News</a>
                    <a class="navbar-brand" href="#">Shop</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
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

            <div class="container py-4">
                <div class="row">
                    {{-- lista --}}
                    <div class="col-xs-12 col-md-2 col-lg-2">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('admin.index') }}"> <i class="fas fa-tachometer-alt fa-lg fa-fw"></i> Dashboard </a></li>
                            <li><a href="{{ route('admin.comics.index') }}"> <i class="fas fa-book fa-lg fa-fw"></i> Comics </a></li>
                            <li><a href="{{ route('admin.collections.index') }}"> <i class="fas fa-folder-open fa-lg fa-fw"></i> Series </a></li>
                            <li><a href="#"> <i class="fas fa-tag fa-lg fa-fw"></i> Tags </a></li>
                        </ul>
                    </div>
                    {{-- main --}}
                    <main class="col-xs-12 col-md-10 col-lg-10">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
