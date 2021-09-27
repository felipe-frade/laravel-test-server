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
    return view('welcome');
});
Route::get('/contato/{id?}', ['uses' => 'ContatoController@index']);

Route::post('/contato', ['uses' => 'ContatoController@criar']);

Route::put('/contato', ['uses' => 'ContatoController@editar']);

Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'Admin\CursoController@index']);
Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.add', 'uses' => 'Admin\CursoController@adicionar']);
Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.save', 'uses' => 'Admin\CursoController@salvar']);
Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'Admin\CursoController@editar']);
Route::put('/admin/cursos/edit/{id}', ['as' => 'admin.cursos.edit', 'uses' => 'Admin\CursoController@edit']);
Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses' => 'Admin\CursoController@deletar']);

// Route::get('/contato/{id?}', function ($id = null) {
//     return "contato $id";
// });
// Route::post('/contato', function () {
//     dd($_POST);
//     return "contato post";
// });
// Route::put('/contato', function () {
//     return "contato put";
// });