<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--  title  --}}
    @hasSection('title')
        <title>@yield('title') | {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    {{--  description  --}}
    @hasSection('description')
        <meta name="description" content="@yield('description')">
    @else
        <meta name="description" content="">
    @endif

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white min-vh-100">
    <div id="app">
        @include('components.templates.sample_nav.black_nav')
        <main class="d-flex">
            <div class="bg-light p-0 border min-vh-100 position-fixed" style="width: 250px">
                <div class="list-group list-group-flush border-bottom">
                    <a href="#" class="list-group-item list-group-item-action bg-light text-primary">
                        メニュー１
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-light text-primary">
                        メニュー２
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-light text-primary">
                        メニュー３
                    </a>
                </div>
            </div>
            @yield('content')
        </main>
    </div>
    @include('components.templates.bootstrap')
</body>
</html>
