@if(isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
    <h1>Crear fruta</h1>
@endif
<form action="{{ isset($fruta) ? action('App\Http\Controllers\FrutaController@update') 
                                : action('App\Http\Controllers\FrutaController@save') }}" 
      method="POST">
    {{csrf_field()}}
    
@if(isset($fruta) && is_object($fruta))
    <input type="hidden" name="id" value=" {{ $fruta->id }} " />
@endif
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ $fruta->nombre ?? '' }}" />
    <br/>
    
    <label for="precio">Precio</label>
    <input type="text" name="precio" value="{{ $fruta->precio ?? 0 }}"/>
    <br/>
    
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{{ $fruta->descripcion ?? '' }}"/>
    <br/>
    
    <input type="submit" value='Guardar' />
</form>
