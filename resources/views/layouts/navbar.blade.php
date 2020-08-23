<div class="d-flex justify-content-around mt-1">
    <h2 class="p-2" style="font-weight: bold;">Menu</h2>
    <h6 class="mt-2">INFOASISTENCIA<span Style="font-size: 22px; font-weight: bold;"> Costos</span></h6>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Apuntes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Datos</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Equipos</a>
                        <a class="dropdown-item" href="#">Materiales</a>
                        <a class="dropdown-item" href="#">Obreros</a>
                        <a class="dropdown-item" href="#">Transportes</a>
                        <a class="dropdown-item" href="#">Generales</a>
                        <a class="dropdown-item" href="#">Indirectos</a>
                        <a class="dropdown-item" href="#">Indices</a>
                    </div>
                </li>
                <li  class="nav-item"><a class="nav-link" href="#">Precios</a></li>
                <li  class="nav-item"><a class="nav-link" href="#">Proyectos</a></li>
                <li  class="nav-item"><a class="nav-link" href="#">Ofertas</a></li>
                <li  class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Grupos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="#">Zonas</a>
                            <a class="dropdown-item" href="#">Grupo Equipos</a>
                            <a class="dropdown-item" href="#">Grupo Materiales</a>
                            <a class="dropdown-item" href="#">Grupo Obreros</a>
                            <a class="dropdown-item" href="#">Grupo Precios</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entradas</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" href="#">Categorías</a>
                            <a class="dropdown-item" href="#">Etiquetas</a>
                            <a class="dropdown-item" href="#">Artículos</a>
                            <a class="dropdown-item" href="#">Ofertas</a>
                            <a class="dropdown-item" href="#" >Servicios</a>
                        </div>
                    </li>
                @endauth

            <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Administrar</a>
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
