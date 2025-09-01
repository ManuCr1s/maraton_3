@extends('template.template')
@section('header')
<link rel="stylesheet" href="{{asset('assets/css/material-dashboard.css')}}">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
@endsection
@section('container')
<div class="off-canvas-sidebar">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white mb-5">
    <div class="container">
      <div class="navbar-wrapper">
        <a href="#"><img src="{{asset('assets/img/logo_maraton.png')}}" alt=""></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route('download',['nombreArchivo' => 'BASES_MARATON_2025.pdf'])}}" class="nav-link">
              <i class="material-icons text-secondary">dashboard</i>
              <h5 class="m-0">Bases</h5>
              Documentos de la Maraton
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('form')}}" class="nav-link">
              <i class="material-icons text-secondary">person_add</i>
              <h5 class="m-0">Formulario</h5>
              Registra tu Inscripcion aqui
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="material-icons text-secondary">fingerprint</i>
              <h5 class="m-0">Verifica</h5>
              Comprueba tu Inscripcion
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header pricing-page header-filter" style="background-image: url('../../assets/img/login.jpg')">
      <div class="container-fluid main-content mt-5">
          <x-slider.secondary/>  
    </div>
  </div>
   <div class="wrapper wrapper-full-page">
    <div class="page-header pricing-page container-filter">
      <div class="container-fluid main-content">
          <div class="row justify-content-center">
              <div class="col-12">
                      <h6 class="m-0 text-secondary text-center">FECHA MAXIMA DE INSCRIPCION</h6>
                      <h2 class="m-0 text-center"><b>24 DE OCTUBRE DEL 2025</b></h2>
              </div>
            
          </div>
          <div class="row mt-5">
              <x-tables.score1/>
              <x-tables.score2/>
          </div>
      <footer class="footer">
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
       <!--    <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div> -->
        </div>
      </footer>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('assets/js/core/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/core/material-dashboard.js?v=2.2.2')}}" type="text/javascript"></script>
</div>
@endsection