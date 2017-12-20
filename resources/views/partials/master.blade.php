<!DOCTYPE HTML>
<html>
<head>
    <title>Sickbay</title>
    <link rel="stylesheet" href="{{ URL::to('css/readable-bootstrap.min.css') }}">
    @yield('style-sheet')
</head>
<body>
@yield('content')
</body>
<script src="{{URL::to('js/jquery.min.js') }}"></script>
<script src="{{URL::to('js/bootstrap.min.js') }}"></script>
@yield('scripts')
</html>