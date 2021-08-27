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
