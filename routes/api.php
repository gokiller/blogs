<?php

use Illuminate\Http\Request;

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
Route::any('bar', function (){
    return "This is a any";
});

Route::post('/sso/dologin', 'ApiController@doLogin')->name('ssologin');

Route::post('/sso/logout', 'ApiController@logout')->name('sso.logout');
