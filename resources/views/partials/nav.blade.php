<nav class="navbar navbar-expand-lg navbar-ligh dll-bg-blue ">
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
                    <a class="nav-link" href="#"><b class="text-white">Hola, Identifícate</b> </a>
                </li>
            </ul>
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn dll-bg-orange my-2 my-sm-0" type="submit"> <b>Buscar</b> </button>
        </div>
    </div>
</nav>


{{-- <div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="navbar bg-white nav d-flex justify-content-between ">
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
    </div>
    <hr>
</div> --}}



<div class="container ">
    <div class="nav-scroller py-2 mb-0 ">
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