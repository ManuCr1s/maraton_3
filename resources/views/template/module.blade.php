<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/module/module-app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/module/pe-icon-7-stroke.css')}}" rel='stylesheet' type='text/css'>
    @yield('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @yield('container')
    <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/module.js')}}" type="text/javascript"></script>
    @yield('footer')
</body>
</html>