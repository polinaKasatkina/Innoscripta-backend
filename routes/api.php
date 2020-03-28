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

Route::get('/', 'HomeController@index');
Route::get('/allProducts', 'ProductsController@getAll');
Route::get('/getRandProducts', 'ProductsController@getRand');
Route::post('/getProducts', 'ProductsController@getProducts');

Route::post('/order/save', 'OrderController@save');
