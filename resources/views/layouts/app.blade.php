<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009900">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AgricHub') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">--}}
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="navbar-fixed">
        <nav class="green">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo left"><img src="{{URL::to('storage/img/agrichub-white.png')}}"
                                                          height="56px"/></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse show-on-medium-and-up right"><i
                            class="material-icons large">menu</i></a>
            </div>
        </nav>
    </div>
    <ul class="side-nav" id="mobile-demo">
        <li><a href="/"><i class="material-icons left">home</i> Home</a></li>
        <li><a href="/user/profile"><i class="material-icons left">account_box</i> My Profile</a></li>
        <li><a href="/ads/create"><i class="material-icons left">add_box</i> Create Ad</a></li>
        <li><a href="/search"><i class="material-icons left">search</i> Search</a></li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="material-icons left">reply</i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>

    <div class="container-fluid" id="top">
        @yield('content')

    </div>
    <div class="clearfix"></div>
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright
                <a class="grey-text text-lighten-4 right" href="#top"><i class="material-icons left">arrow_upward</i>Top</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
