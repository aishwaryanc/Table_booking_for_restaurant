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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/index","testController@index");
Route::post("/store","testController@store");
Route::get("/show","testController@show");
Route::get("/delete/{id}","testController@delete");
Route::get("/edit/{id}","testController@edit");
Route::put("/show/{id}","testController@update");
