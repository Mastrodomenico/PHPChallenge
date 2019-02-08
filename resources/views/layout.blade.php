<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Mastrodomenico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="assets/less/base.min.css">
    <link rel="stylesheet" type="text/css" href="assets/less/header.min.css">
    <link rel="stylesheet" type="text/css" href="assets/less/theme.min.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/style.css">
    <link rel="icon" href="assets/images/ico/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>
<body class="no-transition">
    <div id="page-wrapper">


        @component('header')
        @endcomponent

        <div class="ui layout">
            @yield('content')
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
