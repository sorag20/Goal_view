<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/','HelloController@top');

Route::get('/Goal_view/view','HelloController@view');

Route::get('/Goal_view/list','HelloController@list');

Route::get('/Goal_view/register','HelloController@register');

Route::post('/register','SaveController@register');






