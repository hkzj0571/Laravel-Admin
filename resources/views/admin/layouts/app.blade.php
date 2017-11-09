<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(auth()->check())
        <meta name="api-token" content="Bearer {{ auth()->user()->api_token }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}"/>
    <title>Dashboard - Laradmin</title>
</head>
<body>
<div id="app">
    @yield('main')
    <a id="Anchor"></a>
</div>
</body>
</html>