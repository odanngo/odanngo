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

Route::get('/', 'ScoreController@index');
Route::get('/scores/create', 'ScoreController@create');
Route::get('/scores/show', 'ScoreController@show');

Route::post('/scores', 'ScoreController@store');
Route::get('/scores/{score}/edit', 'ScoreController@edit');
Route::put('/scores/{score}', 'ScoreController@update');
Route::delete('/scores/{score}', 'ScoreController@delete');
Route::get('/messages/create', 'MessageController@create')->name('messages.create');
Route::put('/messages/{message}', 'MessageController@update');
Route::get('/messages', 'MessageController@index');
Route::get('/messages/show', 'MessageController@show')->name('messages.show');
Route::post('/messages', 'MessageController@store');
Route::post('/likes/{message}', 'LikeController@store');
Route::post('/unlikes/{message}', 'LikeController@destroy');
Route::resource('comment', 'CommentController');

Auth::routes();