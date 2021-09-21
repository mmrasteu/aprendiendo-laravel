<h1>Listado de frutas</h1>
<h3><a href="{{ action('App\Http\Controllers\FrutaController@create') }}" >Crear fruta</a></h3>


@if(session('status'))
    <p style="background: green; color: white; ">
        {{session('status')}}
    </p>
@endif

</br>

<ul>
    @foreach($frutas as $fruta)
        <li>
            <a href="{{ action('App\Http\Controllers\FrutaController@detail', ['id' =>$fruta->id] ) }}">
                {{$fruta->nombre}}
            </a>
        </li>
    @endforeach
</ul>