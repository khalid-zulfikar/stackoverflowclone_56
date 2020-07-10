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

Route::get('/quest', function () {
    return view('quest.index');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('quest', 'QuestController');
    Route::post('/comment/{id}','CommentQuestionController@store');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/resetnew', function () {
    return view('auth.passwords.emailnew');
});
