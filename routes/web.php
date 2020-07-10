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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/master', function () {
    return view('datta-able.master');
});

Route::get('/quest', 'QuestController@index'); //menampilkan semua data
Route::get('/quest/create', 'QuestController@create'); //menampilkan halaman form
Route::post('/quest', 'QuestController@pertanyaan'); // menyimpan data
Route::get('/quest/{id}', 'QuestController@show'); //menampilkan detail pertanyaan per-id
Route::get('/quest/{id}/edit', 'QuestController@edit'); //menampilkan form untuk edit data
Route::put('/quest/{id}', 'QuestController@update'); //mengupdate data 
Route::delete('/quest/{id}', 'QuestController@destroy'); //mengupdate data 

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::resource('pertanyaan', 'QuestController');

Route::get('/resetnew', function () {
    return view('auth.passwords.emailnew');
});
