<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

//CantonController
Route::get('/api/v1/canton', 'CantonController@obtenerCantones');
//DistritoController
Route::get('/api/v1/distrito/{id}', 'DistritoController@obtenerDistritos');
//TipoProductoController
Route::get('/api/v1/tipo-producto', 'TipoProductoController@obtenerTipoProductos');
//ProductoController
Route::get('/api/v1/producto/{id}', 'ProductoController@obtenerProductos');
Route::post('/api/v1/producto/{id_tipo_producto}', 'ProductoController@guardarProducto');
Route::post('/api/v1/producto/{id}/{id_tipo_producto}', 'ProductoController@actualizarProducto');
Route::delete('/api/v1/producto/{id}', 'ProductoController@eliminarProducto');
//UnidadVentaController
Route::get('/api/v1/unidad-venta/{id_tipo_producto}', 'UnidadVentaController@obtenerUnidadesVenta');
//ProcedenciaController
Route::get('/api/v1/procedencia', 'ProcedenciaController@obtenerProcedencias');
//PrecioController
Route::get('/api/v1/precio', 'PrecioController@obtenerPrecios');
Route::post('/api/v1/precio', 'PrecioController@guardarPrecio');
Route::delete('/api/v1/precio/{id}', 'PrecioController@eliminarPrecio');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
