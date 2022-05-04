<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Calculating price application using Javascript">
    <meta name="keywords"
        content="calculate, price, laravel, javascript">
    <meta name="author" content="elemis">
    <title>Pick Me Up</title>
    <link rel="shortcut icon" href="{{ asset('sandbox/img/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('sandbox/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('sandbox/css/style.css') }}">
</head>

<body>
    <div class="content-wrapper">

    @yield('content')

    </div>

    <script src="{{ asset('sandbox/js/plugins.js') }}"></script>
    <script src="{{ asset('sandbox/js/theme.js') }}"></script>
    <script src="{{ asset('sandbox/js/calculate.js') }}"></script>
    <script src="{{ asset('sandbox/js/cake.js') }}"></script>
</body>

</html>