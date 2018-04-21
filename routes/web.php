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

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    CRUD::resource('branch', 'Admin\BranchCrudController');
    CRUD::resource('category', 'Admin\CategoryCrudController');
    CRUD::resource('unit', 'Admin\UnitCrudController');
});
