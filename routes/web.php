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
    return view('page.trangchu');
});

Route::get('thuc-don',[
    'as'=>'thuc-don',
    'uses'=>'MenuController@getMenu'
  ]);

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    CRUD::resource('branch', 'Admin\BranchCrudController');
    CRUD::resource('category', 'Admin\CategoryCrudController');
    CRUD::resource('unit', 'Admin\UnitCrudController');
});

// Ajax
Route::group(['prefix' => 'ajax', 'middleware' => 'admin'], function()
{
    // Branch images upload routes
    Route::post('branch/image/upload', ['as' => 'uploadBranchImages', 'uses' => 'Admin\BranchCrudController@ajaxUploadBranchImages']);
    Route::post('branch/image/reorder', ['as' => 'reorderBranchImages', 'uses' => 'Admin\BranchCrudController@ajaxReorderBranchImages']);
    Route::post('branch/image/delete', ['as' => 'deleteBranchImage', 'uses' => 'Admin\BranchCrudController@ajaxDeleteBranchImage']);  
});