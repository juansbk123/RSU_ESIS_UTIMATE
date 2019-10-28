<?php

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
    return view('welcome');
});
//get -> enviar datos de una pagina a otra
//post->enviar datos de un formulario a base de datos
//put ->actualizar un registro de base dedato
//delete->eliminar registro de base de datos
//update-> actualizar un registro
/*
Route::get('/proyecto/index','ProyectoController@index');
Route::get('/proyecto/create','ProyectoController@create');
Route::get('/proyecto/edit','ProyectoController@edit');
*/
// si no queremos trabajar uno por uno de las carptas, usaremos este metodo RESOURCE para agresar todas las rutas -> haremos eso en el crud
// no es necesario las lineas 23,24,25 por que el metodo resouce las remplaza todas.
// y no solo eso SI QUE LLAMARA A TODO LOS METODOS DE proyectiController,index,crete,store,edit...
Route::get('admin', function () {
    return view('admin.dashboard');
});
Route::resource('proyecto','ProyectoController');
Route::resource('Antecedente','AntecedenteController');
//juansbk_1

        /*el metodo view hace referencia a index que esta en proyecto */