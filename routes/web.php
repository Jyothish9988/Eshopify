<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddressController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/product',[AdminController::class,'product']);

Route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

Route::get('/product_view',[AdminController::class,'product_view']);

Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

Route::get('/productupdateview/{id}',[AdminController::class,'productupdateview']);

Route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);

Route::get('/product_category/{category}',[HomeController::class,'product_category_view']);

Route::get('/view_more',[HomeController::class,'view_more_products']);

Route::get('/productinfo/{id}',[HomeController::class,'productinfo']);

Route::get('/search_product',[HomeController::class,'search_product']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);

Route::get('/showcart',[HomeController::class,'showcart']);

Route::get('/delete_cart/{id}',[HomeController::class,'delete_cart']);

Route::get('/address',[HomeController::class,'address']);

Route::post('/address_add/{id}',[HomeController::class,'address_add']);

Route::post('/logout', function () {Auth::logout();return redirect('/'); })->name('logout');

Route::get('/checkout_redirect',[HomeController::class,'checkout_redirect']);

route::get('/add_staff',[AdminController::class,'add_staff']);

Route::post('/upload_staff',[AdminController::class,'upload_staff']);

Route::get('/view_staff',[AdminController::class,'view_staff']);

Route::get('/staff_edit/{id}',[AdminController::class,'staff_edit']);

Route::post('/staff_edit_upload/{id}',[AdminController::class,'staff_edit_upload']);

Route::get('/staff_delete/{id}',[AdminController::class,'staff_delete']);

Route::get('/staff_approve/{id}',[AdminController::class,'staff_approve']);

Route::get('/staff_reject/{id}',[AdminController::class,'staff_reject']);

Route::get('/view_customer',[AdminController::class,'view_customer']);

Route::get('/customer_delete/{id}',[AdminController::class,'customer_delete']);

Route::get('/customer_approve/{id}',[AdminController::class,'customer_approve']);

Route::get('/customer_reject/{id}',[AdminController::class,'customer_reject']);

Route::get('/cod',[HomeController::class,'cod']);

Route::get('/user_orders',[HomeController::class,'user_orders']);

Route::get('/admin_order_view',[AdminController::class,'admin_order_view']);

Route::get('/deliver_order/{id}/{city}',[AdminController::class,'deliver_order']);

Route::post('/store-qrcode', 'App\Http\Controllers\OrderController@storeQRCode')->name('store.qrcode');

Route::post('/deliver/{id1}/{id2}',[AdminController::class,'deliver']);

Route::get('/staff_order_view',[HomeController::class,'staff_order_view']);

Route::get('/staff_order_accept/{id}',[HomeController::class,'staff_order_accept']);

Route::get('/staff_order_reject/{id}',[HomeController::class,'staff_order_reject']);

Route::get('/staff_deliveries_view',[HomeController::class,'staff_deliveries_view']);

Route::get('/scan/{id}',[HomeController::class,'scan']);

Route::get('/delivered/{id}',[HomeController::class,'delivered']);

Route::get('/order_now/{id}',[HomeController::class,'order_now']);

Route::get('/cod_order/{id}',[HomeController::class,'cod_order']);

Route::get('/user_order_cancell/{id}',[HomeController::class,'user_order_cancell']);

Route::get('/user_order_delete/{id}',[HomeController::class,'user_order_delete']);

Route::get('/admin_order_cancel/{id}',[AdminController::class,'admin_order_cancel']);

Route::get('/order_delete_approve/{id}',[AdminController::class,'order_delete_approve']);

Route::post('/add_review/{id}',[HomeController::class,'add_review']);

Route::get('/review_helpful/{id}',[HomeController::class,'review_helpful']);

Route::get('/review_unhelpful/{id}',[HomeController::class,'review_unhelpful']);

Route::get('/review_delete/{id}',[HomeController::class,'review_delete']);

Route::get('/user_return/{id}',[HomeController::class,'user_return']);

Route::post('/return_details_add/{id}',[HomeController::class,'return_details_add']);

Route::get('/contact',[HomeController::class,'contact']);

Route::post('/uploadcontact',[HomeController::class,'uploadcontact']);

Route::get('/contact_view',[AdminController::class,'contact_view']);

Route::get('/contact_reply_view/{id}', [AdminController::class, 'contact_reply_view']);

Route::post('/contact_reply/{id}', [AdminController::class,'contact_reply']);

Route::get('/contact_reply_view/{id}', [AdminController::class, 'contact_reply_view']);

Route::get('/gallery', [AdminController::class, 'gallery']);

Route::post('/upload_gallery', [AdminController::class, 'upload_gallery']);

Route::get('/gallery_delete/{id}', [AdminController::class, 'gallery_delete']);