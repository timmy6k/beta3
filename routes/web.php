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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('active');
Route::get('/viewroles', 'HomeController@roles')->name('roles')->middleware('active');


Route::resource('/material', 'MaterialController')->middleware('active');
Route::get('/material/show/approvals', 'MaterialController@approve')->name('material.approve');
Route::get('/material/create', 'MaterialController@create')->middleware('materialauthor')->name('material.create');

Route::resource('/materialtype', 'MaterialTypeController')->middleware('active');

Route::resource('/dev/role', 'DevRoleController')->middleware('dev');

Route::resource('/admin/user', 'UserController')->middleware('admin');
Route::resource('/superadmin/user', 'SAUserController', ['as'=>'superadmin'])->middleware('superadmin');
Route::resource('/dev/user', 'DevUserController', ['as'=>'dev'])->middleware('dev');



