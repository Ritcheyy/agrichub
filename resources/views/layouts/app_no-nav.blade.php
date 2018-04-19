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
    <div class="container-fluid">
        @yield('content')
    </div>

{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--<footer class="page-footer">--}}
    {{--<div class="footer-copyright">--}}
        {{--<div class="container">--}}
            {{--© 2018 Copyright--}}
            {{--<a class="grey-text text-lighten-4 right" href="#top"><i class="material-icons left">arrow_upward</i>Top</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
</body>
</html>
