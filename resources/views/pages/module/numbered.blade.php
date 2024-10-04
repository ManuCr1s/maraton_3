@extends('template.module')
@section('header')
<link href="{{asset('assets/css/module/demo.css')}}" rel='stylesheet' type='text/css'>
@endsection
@section('container')
<div class="wrapper">
    <x-navs.aside/>
    <div class="main-panel">
        <x-navs.top/>
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Detalle total de participantes</h4>
                                <p class="category">Detalle de los participantes numerados para el dia de la competencia</p>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                             
                                            <table id="registrados" class="table">
                                                <thead>
                                                        <tr>
                                                            <th>DNI</th>
                                                            <th>NOMBRES</th>
                                                            <th>APELLIDOS</th>
                                                            <th>CATEGORIA</th>
                                                            <th>NUMERO</th>
                                                            <th>NUMERO CELULAR</th>
                                                            <th>REGION</th>
                                                            <th>PROVINCIA</th>
                                                            <th>DISTRITO</th>
                                                        </tr>
                                                </thead>
        
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <script src="{{asset('assets/js/plugin/jquery.datatables.js')}}"></script>
    <script src="{{asset('assets/js/plugin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/chartist.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/plugin/jszip.min.js')}}"></script>
    <script type="module" src="{{asset('assets/js/scripts/functions.js')}}" type="text/javascript"></script>
    <script type="module" src="{{asset('assets/js/scripts/numbered.js')}}" type="text/javascript"></script>
@endsection