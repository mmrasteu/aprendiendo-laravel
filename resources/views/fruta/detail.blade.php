<h1>{{$fruta->nombre}}</h1>
<p>
    {{$fruta->descripcion}}
</p>

<br/>

<a href="{{ action('App\Http\Controllers\FrutaController@delete', ['id' => $fruta->id]) }}"> 
    Eliminar 
</a>

<br/>

<a href=""> Actualizar </a>