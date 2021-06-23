<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product','App\Http\Controllers\productControllers@index');
Route::get('/create' ,'App\Http\Controllers\productControllers@create');
Route::post('/store','App\Http\Controllers\productControllers@store');
Route::get('/edit/{id}' , 'App\Http\Controllers\productControllers@edit');
Route::post('/update/{id}','App\Http\Controllers\productControllers@update');
Route::get('/delete/{id}' ,'App\Http\Controllers\productControllers@delete');
Route::get('/indexCategory', 'App\Http\Controllers\CategoriesControllers@indexCategory');
Route::get('/createCategory' , 'App\Http\Controllers\CategoriesControllers@createCategory');
Route::get('/storeCategory', 'App\Http\Controllers\CategoriesControllers@storeCategory');
Route::get('/editCategory', 'App\Http\Controllers\CategoriesControllers@editCategory');
route::get('/updateCategory', 'App\Http\Controllers\CategoriesControllers@updateCategory');


