<!DOCTYPE html>
<head>

    <!-- WittyLight -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wittylight">

    <!-- Favicon icon & Title -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('imgs/favicon.png')}}">
    <title>@yield('title', 'Home') | {{ config('app.name') }}</title>

    <!-- Custom CSS -->
{{--    <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet" type="text/css">--}}
    <link href="https://fonts.googleapis.com/css?family=Kanit:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/css-hamburgers/hamburgers.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/animsition/css/animsition.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/select2/select2.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/daterangepicker/daterangepicker.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    @yield('style')

</head>

<body>
@yield('content')
</body>

</html>
