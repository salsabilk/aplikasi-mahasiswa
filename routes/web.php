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


Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');

// Route::get('/mahasiswas', 'App\Http\Controllers\MahasiswaController@index');
// route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@create');
// route::post('/mahasiswa', 'App\Http\Controllers\MahasiswaController@store');
// //route::delete('/mahasiswa', 'App\Http\Controllers\MahasiswaController@destroy');
// Route::get('/mahasiswas/{mahasiswa}/edit', 'App\Http\Controllers\MahasiswaController@edit');
// Route::get('/mahasiswas/{mahasiswa}', 'App\Http\Controllers\MahasiswaController@update');
Route::resource('/mahasiswas', 'App\Http\Controllers\MahasiswaController');

//students
// Route::get('/students', 'App\Http\Controllers\StudentsController@index');
// Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
// Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');
// Route::post('/students', 'App\Http\Controllers\StudentsController@store');
// Route::delete('/students/{student}', 'App\Http\Controllers\StudentsController@destroy');
// Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentsController@edit');
// Route::patch('/students/{student}', 'App\Http\Controllers\StudentsController@update');
Route::resource('/students', 'App\Http\Controllers\StudentsController');

//colleges
Route::get('/colleges', 'App\Http\Controllers\CollegesController@index');
Route::get('/colleges/create', 'App\Http\Controllers\CollegesController@create');
Route::post('/colleges', 'App\Http\Controllers\CollegesController@store');
Route::delete('/colleges/{college}', 'App\Http\Controllers\CollegesController@destroy');
Route::get('/colleges/{college}/edit', 'App\Http\Controllers\CollegesController@edit');
Route::patch('/colleges/{college}', 'App\Http\Controllers\CollegesController@update');

Route::get('/lessons', 'App\Http\Controllers\LessonsController@index');
Route::get('/lessons/create', 'App\Http\Controllers\LessonsController@create');
Route::post('/lessons', 'App\Http\Controllers\LessonsController@store');
Route::delete('/lessons/{lesson}', 'App\Http\Controllers\LessonsController@destroy');
Route::get('/lessons/{lesson}/edit', 'App\Http\Controllers\LessonsController@edit');
Route::patch('/lessons/{lesson}', 'App\Http\Controllers\LessonsController@update');

Route::get('/krs', 'App\Http\Controllers\KrsController@index');
Route::get('/krs/create', 'App\Http\Controllers\KrsController@create');
Route::post('/krs', 'App\Http\Controllers\KrsController@store');