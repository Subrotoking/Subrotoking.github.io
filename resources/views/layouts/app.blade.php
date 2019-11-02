<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Insentif Jurnal-Prosiding') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .bingkai {
        border-top: 6px solid #00CED1;
        border-bottom: 1px solid black;
        border-right: 1px solid black;
        border-left: 1px solid black;
        background-color: white;
        padding-top: 10px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
        }
        .error {
        color: #FF0000;
        }
        .infogan {
        border-top: 6px solid #222d32;
        border-bottom: 0px solid black;
        border-right: 0px solid black;
        border-left: 0px solid black;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        background-color: rgb(255, 0, 3, .4);
        padding-top: 10px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
        }
        </style>
        <style>
        .blink {
        animation: blink-animation 0.5s steps(5, start) infinite;
        -webkit-animation: blink-animation 0.5s steps(5, start) infinite;
        }
        @keyframes blink-animation {
        to {
            visibility: hidden;
        }
        }
        @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
        }
        }
        .glyphicon{
        font-size: 20px;
        }
        .info{
        font-size: 20px;
        }
        </style>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm fixed-top" style="background-color: #222d32">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app_name', 'Insentif Jurnal-Prosiding') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Beranda</a>
                            </li>
                            @if(Auth::check()&& Auth::user()->level=='admin')
                            <li class="nav-item">
                                <a class="nav-link" href="/user">User</a>
                            </li>
                            @endif
                            @if(Auth::check()&& Auth::user()->level=='admin')
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/post">post</a>
                            </li>
                            @endif
                            @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="/jurnal">Pengajuan</a>
                            </li>
                            @endif
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown" >
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (auth()->user()->image)
                                    <img src="{{ asset(auth()->user()->image) }}" style="width: 30px; height: 30px; border-radius: 60%;">
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 300px; background-color: #F5F5F5">
                                
                                <a class="dropdown-item " style="border-bottom: 4px solid #000000;padding-bottom: 4px;">
                                    <div class="text-center">
                                    <img  src="{{ asset(auth()->user()->image) }}" style="width: 60px; height: 60px; border-radius: 50%;">
                                    </div>
                                </a>
                                <a class="dropdown-item" style="background-color: dark; border-bottom: 4px solid #000000;padding-bottom: 4px;">
                                    <p class="text-left" style="background-color: #F5F5F5;padding-top: 5px;padding-bottom: -5px;font-family: 'Open Sans', sans-serif;">
                                    {{ Auth::user()->name }} <br>
                                    </p>
                                    <p class="text-left" style="background-color: #F5F5F5;padding-top: 2px;padding-bottom: -5px;font-family: 'Open Sans', sans-serif;">
                                    {{ Auth::user()->nip }} <br>
                                    </p>
                                    <p class="text-left" style="background-color: #F5F5F5;padding-top: 2px;padding-bottom: -5px;font-family: 'Open Sans', sans-serif;">
                                    {{ Auth::user()->fakultas }} <br>
                                    </p>
                                    <p class="text-left" style="background-color: #F5F5F5;padding-top: 2px;padding-bottom: -5px;font-family: 'Open Sans', sans-serif;">
                                    {{ Auth::user()->jurusan }} <br>
                                    </p>
                                    <p class="text-left" style="background-color: #F5F5F5;padding-top: 2px;padding-bottom: -5px;font-family: 'Open Sans', sans-serif;">
                                    {{ Auth::user()->email }} <br>
                                    </p>
                                </a>
                                <div class="row" >
                                    <div class="col-md-6" >
                                        <a class="dropdown-item" href="{{ route('profile') }}" >Edit Profile</a>
                                    </div>
                                    <div class="col-md-6" >
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </div>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="padding: 10px 20px;margin-top: 50px;">
            @yield('content')
        </main>
    </div>
</body>
</html>
