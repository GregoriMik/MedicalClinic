<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
=======
>>>>>>> 193e2dd51ae18a60338241b2ea77fbf3e1124cfe
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
<<<<<<< HEAD
                   <p class="brandingLogin"> {{ Auth::user()->name }} witamy w systemie. </p>
=======
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
>>>>>>> 193e2dd51ae18a60338241b2ea77fbf3e1124cfe
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
<<<<<<< HEAD
                            <li><a href="{{ route('login') }}">Logowanie</a></li>
                            <li><a href="{{ route('register') }}">Rejestracja</a></li>
=======
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
>>>>>>> 193e2dd51ae18a60338241b2ea77fbf3e1124cfe
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
<<<<<<< HEAD
                                            Wyloguj
=======
                                            Logout
>>>>>>> 193e2dd51ae18a60338241b2ea77fbf3e1124cfe
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
<<<<<<< HEAD
                                    <li><a href="#">Ustawienia systemu </a></li>
                                    <li><a href="#">Ustawienia profilu </a></li>
                                    <li><a href="#">Samouczek <a href="#"></a></li>
                                    <li><a href="#">Przekaż opinie <a href="#"></a></li>
=======
>>>>>>> 193e2dd51ae18a60338241b2ea77fbf3e1124cfe
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
