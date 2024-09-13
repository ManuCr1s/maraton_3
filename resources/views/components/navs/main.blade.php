<nav class="navbar navbar-expand-lg navbar-light my-3">
    <a class="navbar-brand d-flex" href="{{route('home')}}">
        <i class="fa-solid fa-person-running logo__icon"></i>
        <div class="title">
            <div class="row title__secondary">MARATON INTERNACIONAL</div>
            <div class="row title__main">MESETA DEL</div>
            <div class="row title__main--main">BOMBON</div>
            <div class="row title__secondary">NOVIEMBRE 10, 2024</div>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('form')}}">
                    <div class="row nav-link__main"><i class="fa-solid fa-square-pen pt-1 mr-2"></i>FORMULARIO</div>
                    <div class="row nav-link__secondary">REGISTRA TU INSCRIPCION AQUI</div>
                </a>
            </li>
        </ul>
    </div>
</nav>