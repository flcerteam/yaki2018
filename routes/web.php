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
    'uses'=>'Client\HomeController@getHomeData'
  ]);

  Route::group(['prefix' => 'thuc-don'], function(){
    Route::get('mon-an\{menu}.{categoryId}.html',[
      'as'=>'thucdon',
      'uses'=>'Client\MenuController@getMenu'
    ]);
    Route::get('sieu-thi-yaki\{menu}.{categoryId}.html',[
      'as'=>'market',
      'uses'=>'Client\MenuController@getMenu'
    ]);
    Route::get('product-detail\{name}.{id}.html',[
      'as'=>'detail',
      'uses'=>'Client\DetailController@getDetail'
    ]);
    Route::get('product-type\{menuId}.{categoryId}.html',[
      'as'=>'type',
      'uses'=>'Client\MenuController@getProductType'
    ]);
  });

Route::get('contact',[
    'as' => 'contact',
    'uses' => 'Client\ContactController@getInfo'
]);

Route::get('contact-dtl/{slug}.html',[
    'as' => 'contact-dtl',
    'uses' => 'Client\ContactController@getDetailInfo'
]);

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    CRUD::resource('branch', 'Admin\BranchCrudController');
    CRUD::resource('category', 'Admin\CategoryCrudController');
    CRUD::resource('unit', 'Admin\UnitCrudController');
    CRUD::resource('menu', 'Admin\MenuCrudController');
    CRUD::resource('product', 'Admin\ProductCrudController');
    CRUD::resource('member', 'Admin\MemberCrudController');
    CRUD::resource('event', 'Admin\EventCrudController');

    Route::get('menu/{id}/order', ['as' => 'menu.order', 'uses' => 'Admin\MenuCrudController@order']);
    Route::post('menu/{id}/order', ['as' => 'menu.save.order', 'uses' => 'Admin\MenuCrudController@saveOrderSeq']);

});

// Ajax
Route::group(['prefix' => 'ajax', 'middleware' => 'admin'], function()
{
    // Branch images upload routes
    Route::post('branch/image/upload', ['as' => 'uploadBranchImages', 'uses' => 'Admin\BranchCrudController@ajaxUploadBranchImages']);
    Route::post('branch/image/reorder', ['as' => 'reorderBranchImages', 'uses' => 'Admin\BranchCrudController@ajaxReorderBranchImages']);
    Route::post('branch/image/delete', ['as' => 'deleteBranchImage', 'uses' => 'Admin\BranchCrudController@ajaxDeleteBranchImage']);

    // Product images upload routes
    Route::post('product/image/upload', ['as' => 'uploadProductImages', 'uses' => 'Admin\ProductCrudController@ajaxUploadProductImages']);
    Route::post('product/image/reorder', ['as' => 'reorderProductImages', 'uses' => 'Admin\ProductCrudController@ajaxReorderProductImages']);
    Route::post('product/image/delete', ['as' => 'deleteProductImage', 'uses' => 'Admin\ProductCrudController@ajaxDeleteProductImage']);
});

Route::get('checkout',function(){
    return view('checkout.checkout');
  });
Route::post('get_customer_info','Client\CheckOutController@getCustomerInfo');
Route::post('update_quantity','Client\CheckOutController@updateQtty');
Route::post('remove_item','Client\CheckOutController@removeItem');
Route::post('dat-hang',[
	'as'=>'insert_order',
	'uses'=>'Client\CheckOutController@insertOrder'
]);
/** search form result*/
Route::get('/search','Client\SearchController@getSearchResult')->name('search');
/** auto search key word */
Route::get('/find', 'Client\SearchController@getSearchHint');


Route::post('/add-to-cart','Client\CartController@addToCart');
