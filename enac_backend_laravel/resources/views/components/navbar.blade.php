<nav class="navbar bg-black shadow-sm">
    <a class="navbar-brand" href="{{route('home')}}" style="color: white">
        {{config('app.name')}}
    </a>
    <ul class="nav nav-pills"> 
        <li class="nav-item {{setActivate('inicio')}}"><a class="nav-link color-white" style="color: white" href="/inicio">Inicio
        
        </a></li>
        <li class="nav-item {{setActivate('about')}}"><a class="nav-link color-white" style="color: white" href="/about">Acerca de nosotros
        
        </a></li>
        <li class="nav-item {{setActivate('portfolio')}}"><a class="nav-link color-white" style="color: white" href="/portfolio">portafolio
        
        </a></li>
        <li class="nav-item {{setActivate('contactt')}}"><a class="nav-link color-white" style="color: white" href="/contactt">contacto
        
        </a></li>
        @auth 
            <a class="nav-link"  style="color: white" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                cerrar sesion
            </a>
        @endauth
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>