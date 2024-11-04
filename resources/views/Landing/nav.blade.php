<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{route('inicio')}}" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><img src="{{asset('files/assets/images/auth/Logo-small-bottom.png')}}" width="32"/> GANADO</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{route('inicio')}}" class="nav-item nav-link {{ (url()->current() === config('app.url') ) ? 'active' : '' }}">Inicio</a>
            <a href="{{route('contact')}}" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contactanos</a>
        </div>
        <!-- <a href="login" class="btn btn-primary rounded-pill py-2 px-4">Subastas</a> -->
    </div>
</nav>