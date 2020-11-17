<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'ddlmarket')</title>

        {{-- app.css es de bootstrap --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
    </head>
 
    <body class="bg-white">
        {{-- NAV --}}
        @include('partials.nav') 

        {{-- CAROUSEL --}}
        @include('partials.carousel') 

        {{-- BODY  --}}
        @yield('content-welcome')
        
        {{-- FOOTER  --}}
        @include('partials.footer') 
    </body>
</html>