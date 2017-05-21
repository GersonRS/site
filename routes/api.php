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
})->name('user');

Route::group(['prefix'=>'client', 'middleware' => 'auth:api', 'as'=>'client.'], function(){
    Route::resource('order',
        'Api\Client\ClientCheckoutController', [
            'except' => ['create', 'edit', 'destroy','update']
        ]);
    Route::get('/products', 'Api\Client\ClientProductController@index');
    Route::get('/categories', 'Api\Client\ClientCategoryController@index');
    Route::get('/companies', 'Api\Client\ClientCompanyController@index');
});

