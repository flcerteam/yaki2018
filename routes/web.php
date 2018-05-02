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

Route::get('/',[
    'as'=>'home',
    'uses'=>'HomeController@getHomeData'
  ]);
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
    CRUD::resource('menu', 'Admin\MenuCrudController');
});

// Ajax
Route::group(['prefix' => 'ajax', 'middleware' => 'admin'], function()
{
    // Branch images upload routes
    Route::post('branch/image/upload', ['as' => 'uploadBranchImages', 'uses' => 'Admin\BranchCrudController@ajaxUploadBranchImages']);
    Route::post('branch/image/reorder', ['as' => 'reorderBranchImages', 'uses' => 'Admin\BranchCrudController@ajaxReorderBranchImages']);
    Route::post('branch/image/delete', ['as' => 'deleteBranchImage', 'uses' => 'Admin\BranchCrudController@ajaxDeleteBranchImage']);  
});

Route::get('checkout',function(){
    return view('checkout.checkout');
  });
Route::post('get_customer_info','CheckOutController@getCustomerInfo');
Route::post('update_quantity','CheckOutController@updateQtty');
Route::post('remove_item','CheckOutController@removeItem');
Route::post('dat-hang',[
	'as'=>'insert_order',
	'uses'=>'CheckOutController@insertOrder'
]);
/** search form result*/
Route::get('/search','SearchController@getSearchResult')->name('search');
/** auto search key word */
Route::get('/find', 'SearchController@getSearchHint');

Route::get('product-detail/{id}',[
    'as'=>'detail',
    'uses'=>'DetailController@getDetail'
  ]);
Route::post('/add-to-cart','CartController@addToCart');