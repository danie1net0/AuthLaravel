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

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
//Route::get('/home', 'HomeController@index')->name('home');

/*
 * Documentação:
 *
 * Verificação por e-mail: https://laravel.com/docs/5.8/verification#protecting-routes
 * Recuperação de senha: https://laravel.com/docs/5.8/passwords#after-resetting-passwords
 */
