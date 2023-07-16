<?php

//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\http\Controllers\aboutController;
use App\Http\Controllers\todosController;

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
/* olx.com/clothes */
Route::get('/', function () {
    return view('welcome');
});


Route::get('/create-todos' , 'App\Http\Controllers\todosController@create');
Route::post('store-todos','App\Http\Controllers\todosController@store' );
route::get('/home' ,'App\Http\Controllers\todosController@index');
Route::get('/scale', 'App\Http\Controllers\todosController@scaling');