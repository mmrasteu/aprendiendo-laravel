<h1>{{$titulo}}</h1>
<p>(accion index del controlador PeliculaController)

@if(isset($pagina))
<h3> La pagina es {{$pagina}}</h3>
@endif
 
<a href="{{route('pelicula.detalle', ['id' => 12])}}"> 
    Ir al detalle 12
</a>
