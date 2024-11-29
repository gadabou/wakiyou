<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="{{route('index')}}" class="navbar-brand p-0">
        <img src="{{asset('img/logo_silina_tech.jpg')}}" alt="Logo" class="me-2" style="height: 90px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">

            <a href="{{route('index')}}" class="nav-item nav-link {{ Route::is('index') ? 'active' : '' }}">Accueil</a>
            <a href="{{route('apropos')}}" class="nav-item nav-link {{ Route::is('apropos') ? 'active' : '' }}">Qui sommes-nous ?</a>
            <a href="{{route('produits')}}" class="nav-item nav-link {{ Route::is('produits') ? 'active' : '' }}">Nos Produits</a>
            <a href="{{route('status')}}" class="nav-item nav-link {{ Route::is('status') ? 'active' : '' }}">Notre vision</a>
            <a href="{{route('reglement')}}" class="nav-item nav-link {{ Route::is('reglement') ? 'active' : '' }}">Passez à l'action</a>
            <!--<a href="{{route('articles.index')}}" class="nav-item nav-link {{ Route::is('articles.index') ? 'active' : '' }}" >Actualités</a> -->
            <a href="{{route('contact')}}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>

        </div>
    <!--
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        <a href="{{route('teams.create')}}" class="btn btn-primary py-2 px-4 ms-3">Nous réjoindre</a>-->
    </div>
</nav>
