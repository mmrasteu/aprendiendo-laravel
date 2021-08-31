<!DOCTYPE html>
<html lang="es">  
    <head>    
        <title>Título - @yield('titulo')</title>    
        <meta charset="utf-8">
        <meta name="title" content="@yield('titulo')">
        <meta name="description" content="Descripción de la WEB">
        <meta name="author" content="Miguel A. M. Rasteu">  
    </head>  
    <body>    
        @section('header')
            CABECEREA DE LA WEB (master)
        @show
        
        <div class='container'>
            @yield('content')
        </div>
        
        @section('footer')
            PIE DE PÁGINA DE LA WEB (master)
        @show
    </body>  
</html>
