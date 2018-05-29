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
    Route::get('mon-an/{menu}.{categoryId}.html',[
      'as'=>'thucdon',
      'uses'=>'Client\MenuController@getMenu'
    ]);
    Route::get('sieu-thi-yaki/{menu}.{categoryId}.html',[
      'as'=>'market',
      'uses'=>'Client\MenuController@getMenu'
    ]);
    Route::get('product-detail/{name}.{id}.html',[
      'as'=>'detail',
      'uses'=>'Client\DetailController@getDetail'
    ]);
    Route::get('product-type/{name}.{menuId}.{categoryId}.html',[
      'as'=>'type',
      'uses'=>'Client\MenuController@getProductType'
    ]);
  });

Route::get('branch',[
    'as' => 'branch',
    'uses' => 'Client\ContactController@getInfo'
]);

Route::get('branch-dtl/{slug}.html',[
    'as' => 'branch-dtl',
    'uses' => 'Client\ContactController@getDetailInfo'
]);

Route::get('tuyen-dung',[
  'as' => 'tuyen-dung',
  'uses' => 'Client\RecruitmentController@getNews'
]);

// reservation START
Route::get('reservation',[
  'as' => 'reservation',
  'uses' => 'Client\ReservationController@getInfo'
]);

Route::post('reservation_success',[
	'as'=>'insert_reservation',
	'uses'=>'Client\ReservationController@insertReservation'
]);

Route::get('success',[
	'as'=>'success',
	'uses'=>'Client\ProcessController@getSuccess'
]);

Route::post('get_member_info','Client\ReservationController@getMemberInfo');

Route::post('get_branch_time_info','Client\ReservationController@getBranchTimeInfo');
// reservation END

// Member Start
Route::get('member',[
  'as' => 'member',
  'uses' => 'Client\MemberController@getInfo'
]);

Route::post('get_search_member','Client\MemberController@getMemberInfo');

Route::post('get_point_member','Client\MemberController@getPointMemberInfo');

Route::post('get_regulation_member','Client\MemberController@getRequlationMemberInfo');
// Member End

// Buffet Start
Route::get('buffet/{name}.{id}.html',[
  'as' => 'buffet',
  'uses' => 'Client\BuffetController@getInfo'
]);
// Buffet End

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    CRUD::resource('branch', 'Admin\BranchCrudController');
    CRUD::resource('category', 'Admin\CategoryCrudController');
    CRUD::resource('unit', 'Admin\UnitCrudController');
    CRUD::resource('menu', 'Admin\MenuCrudController');
    CRUD::resource('product', 'Admin\ProductCrudController');
    CRUD::resource('buffet-product', 'Admin\BuffetProductCrudController');
    CRUD::resource('member', 'Admin\MemberCrudController');
    CRUD::resource('event', 'Admin\EventCrudController');
    CRUD::resource('reservation-table', 'Admin\ReservationTableCrudController');
    CRUD::resource('order', 'Admin\OrderCrudController');
    CRUD::resource('parameter', 'Admin\ParameterCrudController');
    CRUD::resource('recruitment', 'Admin\RecruitmentCrudController');

    Route::get('menu/{id}/order', ['as' => 'menu.order', 'uses' => 'Admin\MenuCrudController@order']);
    Route::post('menu/{id}/order', ['as' => 'menu.save.order', 'uses' => 'Admin\MenuCrudController@saveOrderSeq']);

    // Update status
    Route::post('reservation-table/update-status', ['as' => 'updateRtStatus', 'uses' => 'Admin\ReservationTableCrudController@updateStatus']);
    Route::post('order/update-status', ['as' => 'updateOrderStatus', 'uses' => 'Admin\OrderCrudController@updateStatus']);
    
    // Dashboard
    Route::get('dashboard', 'Admin\DashboardController@dashboard')->name('backpack.dashboard');
    Route::get('/', 'Admin\DashboardController@redirect')->name('backpack');
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

    // Buffet Product images upload routes
    Route::post('buffet-product/image/upload', ['as' => 'uploadBuffetProductImages', 'uses' => 'Admin\BuffetProductCrudController@ajaxUploadProductImages']);
    Route::post('buffet-product/image/reorder', ['as' => 'reorderBuffetProductImages', 'uses' => 'Admin\BuffetProductCrudController@ajaxReorderProductImages']);
    Route::post('buffet-product/image/delete', ['as' => 'deleteBuffetProductImage', 'uses' => 'Admin\BuffetProductCrudController@ajaxDeleteProductImage']);
});

Route::get('checkout',function(){
    return view('checkout.checkout');
  });
Route::post('get_customer_info','Client\CheckOutController@getCustomerInfo');
Route::post('update_quantity','Client\CheckOutController@updateQtty');
Route::post('remove_item','Client\CheckOutController@removeItem');
Route::post('order_success',[
	'as'=>'insert_order',
	'uses'=>'Client\CheckOutController@insertOrder'
]);
/** search form result*/
Route::get('search','Client\SearchController@getSearchResult')->name('search');
/** auto search key word */
Route::get('find', 'Client\SearchController@getSearchHint');


Route::post('add-to-cart','Client\CartController@addToCart');

Route::get('about','Client\ParametersController@getAboutContent');
/**buffet menu */
Route::get('buffet',function(){
  return view('buffet.buffet');
});