<nav class="navbar bg-white shadow-sm">

    <ul class="nav nav-pills form-group form-row">
        <li class="nav-item">
            <a class="nav-link {{ setActive('home') }}"  href="{{ route('home') }}">@lang('Home')</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>
        </li>

        <li class="nav-item" >
            <a class="nav-link {{ setActive('portafolio') }}" href="{{ route('portafolio') }}">@lang('Portafolio')</a>
        </li>

        <li class="nav-item" >
            <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a>
        </li>

        <li class="nav-item" >
            <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">@lang('Login')</a>
        </li>
    </ul>
</nav> 