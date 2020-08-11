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
/*
Route::get('/', function () {
    return view('welcome');
})->('home');
*/

Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

Route::view('/contacto','contacto')->name('contacto');
Route::post('/contacto','contactoController@store')->name('emailcontacto.store');

// Project.
Route::get('/projects','ProjectController@index')->name('projects.index');
Route::get('/projects/create','ProjectController@create')->name('projects.create');
Route::get('/projects/{project}','ProjectController@show')->name('projects.show');
Route::get('/projects/{project}/editar','ProjectController@edit')->name('projects.edit');
Route::patch('/projects/{project}','ProjectController@update')->name('projects.update');
Route::post('/projects','ProjectController@store')->name('projects.store');
// Chat.
Route::get('/chat','ChatController@index')->name('chat.index');
// Pago
Route::get('/pago','MercadoPagoController@index')->name('pago.index');

// Upload Files
/*Route::get('fileupload', 'FileUploadController@fileUpload')->name('fileupload');

Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');
Route::get('subir-archivo','subirArchivoController@index')->name('subir-archivo');*/



