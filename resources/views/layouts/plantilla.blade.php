<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('tittle')</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">                          
    </head>
    <body>
        @include('layouts.partials.header')
    
    
        @yield('content')
        
        @include('layouts.partials.footer')    
    </body>
</html>


