@extends('template.template')
@section('header')
<link rel="stylesheet" href="{{asset('assets/css/material-dashboard.css')}}">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
@endsection
@section('container')
 <x-modals.main/>  
<div class="off-canvas-sidebar">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white mb-5">
    <div class="container">
      <div class="navbar-wrapper">
        <a href="#"><img src="{{asset('assets/img/munipasco_maraton.png')}}" alt=""></a>
      </div>
      <button class="navbar-toggler text-secondary bg-secondary p-3" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route('download',['nombreArchivo' => 'BASES_MARATON_2025.pdf'])}}" class="nav-link">
              <i class="material-icons text-secondary text-mobile">dashboard</i>
              <h5 class="m-0 text-secondary text-mobile">Bases</h5>
              <div class="text-dark text-mobile">Documentos de la Maraton</div>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('form')}}" class="nav-link">
              <i class="material-icons text-secondary text-mobile">person_add</i>
              <h5 class="m-0 text-secondary text-mobile">Formulario</h5>
              <div class="text-dark text-mobile">Registra tu Inscripcion aqui</div> 
            </a>
          </li>
          <li class="nav-item ">
            <a type="button"  class="nav-link" data-toggle="modal" data-target="#modalVerification">
              <i class="material-icons text-secondary text-mobile">fingerprint</i>
              <h5 class="m-0  text-secondary text-mobile">Verifica</h5>
              <div class="text-dark text-mobile">Comprueba tu Inscripcion</div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header pricing-page header-filter" style="background-image: url('../../assets/img/login.jpg')">
      <div class="container-fluid main-content mt-md-5 mt-sm-1">
          <x-slider.secondary/>  
    </div>
  </div>
   <div class="wrapper wrapper-full-page">
    <div class="container-filter">
      <div class="container-fluid main-content">
          <div class="row justify-content-center">
              <div class="col-12">
                      <h6 class="m-0 text-warning text-center">FECHA MAXIMA DE INSCRIPCION</h6>
                      <h2 class="m-0 text-center"><b>24 DE OCTUBRE DEL 2025</b></h2>
              </div>
            
          </div>
          <div class="row mt-5">
              <x-tables.score1/>
              <x-tables.score2/>
          </div>
     <!--  <footer class="footer">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  
                </a>
              </li>
              <li>
                <a href="#">
                  Facebook
                </a>
              </li>
              <li>
                <a href="#">
                  Tik Tok
                </a>
              </li>
              <li>
                <a href="#">
                  Youtube
                </a>
              </li>
            </ul>
          </nav>
       <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div> 
        </div>
      </footer> -->
    </div>
  </div>
   <div class="">
    <div class="pricing-page header-filter" style="background-image: url('../../assets/img/maraton_6.jpg')">
      <div class="container-flui main-content">
          <div class="row justify-content-center">
              <div class="col-12">
                      <div class="ml-5 pl-3 border-left border-secondary">
                            <h6 class="m-0 text-secondar">NUESTROS</h6>
                            <h2 class="m-0 text-secondary"><b>AUSPICIADORES SON</b></h2>
                    </div>
              </div> 
          </div>
          <div class="row pl-5">
              <div class="col-md-3"><img src="{{asset('assets/img/logo/hmpp_2.png')}}" alt="MUNICIPALIDAD PROVINCIAL DE PASCO" class="w-50 my-5 mx-2"></div>
              <div class="col-md-3"><img src="{{asset('assets/img/logo/mopal_2.png')}}" alt="NOPAL" class="w-50 my-5 mx-2"></div>
              <div class="col-md-3"><img src="{{asset('assets/img/logo/sanapukio.png')}}" alt="AGUA SANAPUKIO" class="w-50 my-5 mx-2"></div>
              <div class="col-md-3"><img src="{{asset('assets/img/logo/milpo.png')}}" alt="MILPOCOOP" class="w-50 my-5 mx-2"></div>
          </div>
          <div class="row pl-5">
              <div class="col-md-3"><img src="{{asset('assets/img/logo/leidy.png')}}" alt="LEIDY" class="w-50 my-5 mx-2"></div>
              <div class="col-md-3"><img src="{{asset('assets/img/logo/carhuamayo.png')}}" alt="MUNICIPALIDAD DE CARHUAMAYO" class="w-50 y-5 mx-2"></div>
              <div class="col-md-3"><img src="{{asset('assets/img/logo/gore.png')}}" alt="GOBIERNO REGIONAL DE PASCO" class="w-50 my-5 mx-2"></div>
              <div class="col-md-3"><img src="{{asset('assets/img/logo/elcajacho.png')}}" alt="RESTAURANTE EL CAJACHO" class="w-50 my-5 mx-2"></div>
          </div>
          <div class="row pl-5">
              <div class="col-md-3"><img src="{{asset('assets/img/logo/alquitara.png')}}" alt="ALQUITARA" class="w-50 my-5 mx-2"></div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
          </div>
      </div>

    </div>
  </div>
</div>
@endsection
@section('footer')
<script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/material-dashboard.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/level.js')}}"></script>
@endsection