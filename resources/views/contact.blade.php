
@extends('layout') 

@section('title', 'Contact')

<!-- Por parametro recibe el nombre de donde vamos a insertar en esta section -->
@section('content')
    <h1> {{ __('Contact')}} </h1>
    <form method="POST" acction = {{ route('contact') }}>
        {{-- Esta directiva lo que hace es agregar un campo oculto con el token del usuario que laravel va a verificar --}}
        @csrf
    <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="text" name="subject" placeholder="Asunto" value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button>@lang('Send')</button>
    </form>
@endsection