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
// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        return View::make('welcome');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
});
Route::get('perfil', function()
    {
        return View::make('perfil');
    });
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('perfil','PerfilController');
Route::resource('crud','CRUDController');
Route::resource('factures','FacturesController');
Route::resource('presupost','PresupostController');
Route::resource('albarans','AlbaransController');