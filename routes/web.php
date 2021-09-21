<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "<h1>Hola mundo</h1>";
    
});

use App\Http\Controllers\PeliculaController;
Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index'])
        ->name('pelicula.index');

Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])
        ->name('pelicula.detalle')
        ->middleware('testyear');

Route::get('/redirigir', [PeliculaController::class, 'redirigir'])
        ->name('pelicula.redirigir');

Route::get('/formulario', [PeliculaController::class, 'formulario'])
        ->name('pelicula.formulario');

Route::post('/recibir', [PeliculaController::class, 'recibir'])
        ->name('pelicula.recibir');

use App\Http\Controllers\UsuarioController;
Route::resource('usuario', UsuarioController::class);

//Rutas frutas
use App\Http\Controllers\FrutaController;
Route::group(['prefix'=>'fruta'], function(){ 
    Route::get('index', [FrutaController::class, 'index'])
            ->name('fruta.index');
    Route::get('detail/{id}', [FrutaController::class, 'detail'])
            ->name('fruta.detail');
});

/*
 * PRINCIPALES METODOS HTTP
 * 
 * GET: Conseguir datos
 * POST: Guardar datos
 * PUT: Actualizar datos
 * DELETE: Borrar datos
 * 
 */
/*
Route::get('/mostrar-fecha', function(){
    echo "<h1>Fecha actual</h1>";
    echo date('d-m-Y');
    echo "<br/>";
    echo "<a href='/'>Inicio</a>";
});
*/

/*
Route::get('/mostrar-fecha', function(){
    $titulo = "Estoy mostrando la fecha ";
    return view('mostrar-fecha', array(
        'titulo' => $titulo,
        'year' => $year
    ));
});


Route::get('/pelicula/{titulo}/{year?}', function($titulo = "Empty", $year = 2019){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function(){
    
    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'Superman', 'Gran Torino');
    
    return view('peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado);
});


Route::get('pagina-generica', function(){
    
    return view('pagina');
});
 * 
 */