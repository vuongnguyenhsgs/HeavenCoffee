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

Route::get('/', 'Process\LoginController@getLogin');
Route::get('/login', 'Process\LoginController@getLogin');
Route::post('/login', 'Process\LoginController@postLogin');

Route::get('/Admin/drinks/all','Process\DrinkController@getAll');
Route::get('/Admin/drinks/add-new','Process\DrinkController@getAddingNewDrink');
Route::post('/Admin/drinks/is-existed','Process\DrinkController@isExistedDrink');
Route::post('/Admin/drinks/add','Process\DrinkController@postAddingNewDrink');
