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

Route::get('/', 'QuestController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/master', function () {
    return view('datta-able.master');
});



Route::resource('quest', 'QuestController');
Route::middleware(['auth'])->group(function () {
    Route::post('/comment/{id}','CommentQuestionController@store');
    Route::Delete('/comment/{id}','CommentQuestionController@destroy');
    Route::put('comments/edit','CommentQuestionController@updateComment');
    Route::post('/comment/store', 'CommentQuestionController@store')->name('comment.add');
    Route::post('/reply/store', 'CommentQuestionController@replyStore')->name('reply.add');
    Route::post('/like/comment', 'CommentquestionLikeController@store')->name('like.comment');;
    
});
Route::get('/quest','QuestController@index');
Route::get('/quest/{id}','QuestController@show');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/resetnew', function () {
    return view('auth.passwords.emailnew');
});
