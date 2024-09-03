<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css'])
    @yield('header')
</head>
<body>
    @yield('container')
    @vite(['resources/js/app.js'])
    @yield('footer')
</body>
</html>