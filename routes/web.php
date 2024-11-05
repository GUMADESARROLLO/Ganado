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
    return view('Landing.Home');
})->name('inicio');

Route::get('contact', function () {
    return view('Landing.Contact');
})->name('contact');

Route::get('nosotros', function () {
    return view('Landing.About');
})->name('nosotros');

Route::get('galeria', function () {
    return view('Landing.Gallery');
})->name('galeria');

Route::post('savecontact', 'LandingController@savecontact')->name('savecontact');

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Usuarios', 'HomeController@Usuarios')->name('Usuarios');


Route::get('/Fincas', 'FincaController@getFincas')->name('Fincas');


Route::get('/Lotes', 'LoteController@getLotes')->name('Lotes');


Route::get('/Bovinos', 'BovinoController@getBovinos')->name('Bovinos');
Route::get('/BovinosDetalles', 'BovinoController@getDetalles')->name('BovinosDetalles');



Route::get('/subasta', 'SubastaController@ViewHome')->name('subasta');
Route::get('/subasta-detalles', 'SubastaController@Detalles')->name('subasta-detalles');
Route::get('/subasta-lista', 'SubastaController@Listas')->name('subasta-lista');
Route::get('/subasta-lista/agregar', 'SubastaController@Agregar')->name('Listas-Agregar');
Route::get('/subasta-lista/editar', 'SubastaController@Agregar')->name('Listas-Editar');
Route::get('/subasta-lista/eliminar', 'SubastaController@Agregar')->name('Listas-Eliminar');
