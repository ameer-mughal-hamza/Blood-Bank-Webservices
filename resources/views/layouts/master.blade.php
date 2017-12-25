<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--Study the method below from laravel blogger--}}
    <link href="{{ asset('css/flaty-bootstrap.min.css') }}" rel="stylesheet">

    {{--Study this method from pluralsight and is the secure method--}}
    {{--<link href="{{ URL:: to('css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ URL:: to('css/styles.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>