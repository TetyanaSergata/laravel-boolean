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

// Route::get('/', function () {
//     return view('welcome');
// });

// Pagina statica
Route::get('/', 'StaticPageController@index')->name('static_page.index');
Route::get('/lezione-gratuita', 'StaticPageController@lezione')->name('static_page.lezione');
Route::get('/domande-frequenti', 'StaticPageController@domande')->name('static_page.domande');
Route::get('/privacy', 'StaticPageController@privacy')->name('static_page.privacy');

// Pagina dinamica
Route::get('/students', 'StudentController@index')->name('student.index');
// Dettaglio studente preso tramite {id}
Route::get('/students/show/{id}', 'StudentController@show')->name('student.show');   //!!importante
