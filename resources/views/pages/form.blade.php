@extends('template.template')
@section('header')
    <link rel="stylesheet" href="{{asset('assets/css/style_wizard.css')}}">
@endsection
@section('container')
    <div class="container-fluid" id="container">
        <div class="container" id="container__form">
            <x-modals.bases/>
            <x-navs.secondary/>
            <x-forms.wizard/>
        </div>
       
    </div>
@endsection