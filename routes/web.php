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



Route::view('/home', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', 'App\Http\Controllers\PortafolioController@index')->name('portafolio');
Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'auth/login')->name('login');

////CREAR UN NUEVA PETICION Y CONTROLADOR PARA PROCESAR LOS DATOS DE CONTACT
//Route::post('contact', 'App\Http\Controllers\MessagesController@store');