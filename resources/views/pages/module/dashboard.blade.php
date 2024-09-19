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
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>ELITE VARONES</td>
                                                        <td class="text-right">
                                                            2.920
                                                        </td>
                                                        <td class="text-right">
                                                            53.23%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>ELITE MUJERES</td>
                                                        <td class="text-right">
                                                            1.300
                                                        </td>
                                                        <td class="text-right">
                                                            20.43%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>SUPER MASTER</td>
                                                        <td class="text-right">
                                                            760
                                                        </td>
                                                        <td class="text-right">
                                                            10.35%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>MASTER</td>
                                                        <td class="text-right">
                                                            690
                                                        </td>
                                                        <td class="text-right">
                                                            7.87%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>JUVENILES</td>
                                                        <td class="text-right">
                                                            600
                                                        </td>
                                                        <td class="text-right">
                                                            5.94%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>MENORES</td>
                                                        <td class="text-right">
                                                            550
                                                        </td>
                                                        <td class="text-right">
                                                            4.34%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>JUNIOR</td>
                                                        <td class="text-right">
                                                            550
                                                        </td>
                                                        <td class="text-right">
                                                            4.34%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>INFANTIL</td>
                                                        <td class="text-right">
                                                            550
                                                        </td>
                                                        <td class="text-right">
                                                            4.34%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>HABILIDADES ESPECIALES SORDO Y MUDO</td>
                                                        <td class="text-right">
                                                            550
                                                        </td>
                                                        <td class="text-right">
                                                            4.34%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                 <i class="fa fa-line-chart"></i>
                                                            </div>
                                                        </td>
                                                        <td>HABILIADADES ESPECIALES VISUAL</td>
                                                        <td class="text-right">
                                                            550
                                                        </td>
                                                        <td class="text-right">
                                                            4.34%
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-1">
                                        DSDASSDSA
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


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>
@endsection
@section('footer')

@endsection