
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ddlmarket')</title>

    {{-- app.css es de bootstrap --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    {{-- <Esta directiva incrusta el blade que se encuentra en views/partials/nav.blade.php (Es por tenerlo mas organizado) --}}
    @include('partials.nav') 

    {{-- Esta directiva incrusta el contenido dicamicamente de otra vista  --}}
    @yield('content')
</body>
</html>