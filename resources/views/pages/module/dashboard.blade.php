@extends('template.module')
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
                                <h4 class="title">Numero total de participantes</h4>
                                <p class="category">Detalle de la cantidad de participantes por categoria</p>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="table-responsive">
                             
                                            <table id="datatables" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ICON</th>
                                                        <th>NOMBRE DE LA CATEGORIA</th>
                                                        <th>CODIGO DE CATEGORIA</th>
                                                        <th>CANTIDAD DE INSCRITOS</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="3"></th>
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-1">
                                            <p class="category">Grafica de los inscritos por categoria</p>
                                            <div class="content">
                                                <div id="chartActivity" class="ct-chart "></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Estadistica de Participantes</h4>
                                <p class="category">Numero de Participantes por categoria</p>
                            </div>
                            <div class="content">
                                <div id="chartEmail" class="ct-chart "></div>
                            </div>
                            <div class="footer">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Open
                                    <i class="fa fa-circle text-danger"></i> Bounce
                                    <i class="fa fa-circle text-warning"></i> Unsubscribe
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Inscritos Recientemente</h4>
                                <p class="category">Ultima hora</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                            </div>
                            <div class="footer">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Open
                                    <i class="fa fa-circle text-danger"></i> Click
                                    <i class="fa fa-circle text-warning"></i> Click Second Time
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Updated 3 minutes ago
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
    <script src="{{asset('assets/js/plugin/sweetalert2.js')}}"></script>
    <script src="{{asset('assets/js/plugin/jquery.datatables.js')}}"></script>
    <script src="{{asset('assets/js/plugin/sum.js')}}"></script>
    <script src="{{asset('assets/js/plugin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/chartist.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/plugin/jszip.min.js')}}"></script>
    <script type="module" src="{{asset('assets/js/scripts/functions.js')}}" type="text/javascript"></script>
    <script type="module" src="{{asset('assets/js/scripts/dashboard.js')}}" type="text/javascript"></script>
@endsection