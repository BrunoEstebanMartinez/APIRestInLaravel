<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
 
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


/* Rutas de vistas, redirección ... 
    Route::get('/', function () {
    return view('welcome');
});
*/

/*    Obtiene la ruta de la vista
       y almacenala en la variable 'Welcome' 
       en la extensión Template Blade 'other 
       Route::get('/other', function (){
        return view('other');
});

Route::get('/users', function(){
    return view('users');
});

       */



Route::get('/user', [Controller::class, 'index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
