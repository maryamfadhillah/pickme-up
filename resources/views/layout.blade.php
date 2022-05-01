<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
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
</body>

</html>