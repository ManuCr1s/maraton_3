@extends('template.module')
@section('header')
<link href="{{asset('assets/css/module/demo.css')}}" rel='stylesheet' type='text/css'>
@endsection
@section('container')
<div class="wrapper">
    <x-navs.aside/>
    <div class="main-panel">
        <x-navs.top/>
    </div>
</div>
   
@endsection
@section('footer')
@endsection