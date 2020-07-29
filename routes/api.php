<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/react/articles', 'ArticleController@index');
Route::post('/react/article/store', 'ArticleController@store');
Route::get('/react/article/edit/{id}', 'ArticleController@getArticle');
Route::get('/react/article/{id}', 'ArticleController@getArticle');
Route::put('/react/article/{id}', 'ArticleController@update');
Route::delete('/react/article/delete/{id}', 'ArticleController@delete');
