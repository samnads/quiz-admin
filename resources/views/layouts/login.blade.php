<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bestway - @yield('title', 'Default')</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('includes.user.login.head-assets')
</head>

<body class="{{ @$body_css_class }}">
    @if (strpos($_SERVER['SERVER_NAME'], 'demo.azinova.me') !== false ||
            strpos($_SERVER['SERVER_NAME'], '127.0.0.1') !== false)
        <div class="demo-ribbon">
            <span>DEMO</span>
        </div>
    @endif
    @yield('content')
    @include('includes.user.login.footer-assets')
    @stack('footer-assets')
</body>

</html>
