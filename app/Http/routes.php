<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});



//全トピック表示画面
Route::get('/', 'TopicsController@index');

Route::get('/a', function () {
    return view('welcome');
});
//トピックの新規追加画面
Route::get('/topics/add', 'TopicsController@add');
Route::post('/topics/create', 'TopicsController@create');

//任意idのトピック表示
Route::get('/topics/{id}', 'TopicsController@show');

//任意idのトピック編集
Route::get('/topics/edit/{id}', 'TopicsController@edit');
Route::post('/topics/update/{id}', 'TopicsController@update');

//任意idのトピック削除
Route::post('/topics/delete', 'TopicsController@delete');