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

Route::get('test',[
  'as'=>'test','uses'=>'TestController@testAction'
]);

Route::get('/show/{id}',[
    'as'=>'show','uses'=>'CRUDController@showAction'
]);

Route::get('/insert',[
    'as'=>'insert','uses'=>'CRUDController@insertAction'
]);

Route::get('/update/{id}',[
    'as'=>'update','uses'=>'CRUDController@updateAction'
]);

Route::get('/delete/{id}',[
    'as'=>'delete','uses'=>'CRUDController@deleteAction'
]);

Route::get('/showAll',[
    'as'=>'showAll','uses'=>'CRUDController@showAllAction'
]);
