<h1>Crear fruta</h1>
<form action="{{ action('App\Http\Controllers\FrutaController@save') }}" method="POST">
    {{csrf_field()}}
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" />
    <br/>
    
    <label for="precio">Precio</label>
    <input type="number" name="precio" />
    <br/>
    
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" />
    <br/>
    
    <input type="submit" value='Guardar' />
</form>
