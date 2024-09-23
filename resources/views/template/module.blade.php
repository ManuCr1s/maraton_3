<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/module/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/module/light-bootstrap-dashboard.css?v=1.4.1.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/module/pe-icon-7-stroke.css')}}" rel='stylesheet' type='text/css'>
    @yield('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @yield('container')
    <script src="{{asset('assets/js/plugin/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/plugin/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/plugin/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/module.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/demo.js')}}" type="text/javascript"></script>
    @yield('footer')
</body>
</html>