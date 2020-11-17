@include('menu.menulateral')

<nav class="navbar navbar-expand-md navbar-dark  dll-bg-blue">
    <div class="d-flex flex-grow-1">

        <a class="navbar-brand" href="#"> 
             <span class="text-white " style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>  
        </a>
        <a class="navbar-brand" href="#">
            <b class="text-white">Dllmarket</b>
        </a>
        <form class="mr-2 my-auto w-100 d-inline-block order-1">
            <div class="input-group">
                <input type="text" class="form-control border border-right-0" placeholder="Search...">
                <span class="input-group-append ">
                    <button class="btn btn-white  border border-left-0" type="button">
                        <i class="fa fa-search text-white"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
    <button class="navbar-toggler order-0" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse flex-shrink-1 flex-grow-0 order-last" id="navbar7">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b class="text-white">Idioma</b>   
                </a>  
                <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">Español</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cambiar pais/región</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> <b class="text-white">Pedidos</b> </a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn dll-bg-orange "> <b>Hola, Identifícate </button>
                {{-- <a class="nav-link" href="#"><b class="dll-text-blue">Hola, Identifícate</b> </a> --}}
            </li>

        </ul>
    </div>
</nav>







<div class="container">
    <div class="nav-scroller py-2 mb-0">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted nav-link {{ setActive('home') }}"  href="{{ route('home') }}"> 
                <b>@lang('Productos')</b> 
            </a>

            <a class="p-2 text-muted nav-link {{ setActive('portafolio') }}" href="{{ route('portafolio') }}"> 
                <b>@lang('Eventos')</b>  
            </a>

            <a class="p-2 text-muted nav-link {{ setActive('about') }}" href="{{ route('about') }}">
                <b>@lang('Servicio al cliente')</b>  
            </a>
           
            <a class="p-2 text-muted nav-link {{ setActive('contact') }}" href="{{ route('contact') }}"> 
                <b>@lang('Soporte')</b>  
            </a>

            <a class="p-2 text-muted nav-link {{ setActive('login') }}" href="{{ route('login') }}"> 
                <b> @lang('Login')</b>  
            </a>
            <a class="p-2 text-muted" href="#">Design</a>
            <a class="p-2 text-muted" href="#">Culture</a>
            <a class="p-2 text-muted" href="#">Business</a>
        </nav>
    </div>
</div>