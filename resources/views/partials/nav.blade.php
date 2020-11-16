<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#"> 
        <b class="text-white">Dllmarket</b>
    </a>
    
    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> --}}
            
            
            {{-- 
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> --}}
        </ul>
        <div class="form-inline my-2 my-lg-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b class="text-white">Dropdown</b>   
                    </a>  
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">Español</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cambiar pais/región</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><b class="text-white">Hola, Identifícate</b> </a>
                </li>
            </ul>
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-warning my-2 my-sm-0" type="submit"> <b>Buscar</b> </button>
        </div>
    </div>
</nav>



<nav class="navbar bg-white shadow-sm ">
    <ul class="nav nav-pills form-group form-row">
        <li class="nav-item">
            <a class="nav-link {{ setActive('home') }}"  href="{{ route('home') }}"> 
                <b class="text-dark">@lang('Productos')</b> 
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">
                <b class="text-dark">@lang('Servicio al cliente')</b> 
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link {{ setActive('portafolio') }}" href="{{ route('portafolio') }}"> 
                <b class="text-dark">@lang('Eventos')</b> 
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}"> 
                <b class="text-dark">@lang('Soporte')</b> 
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}"> 
                <b class="text-dark"> @lang('Login')</b> 
            </a>
        </li>
    </ul>
</nav> 