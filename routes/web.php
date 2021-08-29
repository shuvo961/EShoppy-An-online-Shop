<?php
use Illuminate\Support\Facades\Route;


Route::get('/', [

    'uses'=> '\App\Http\Controllers\EshopController@index',
    'as' => '/'
] );


Route::get('man-product/{id}',[
    'uses'=>'\App\Http\Controllers\EshopController@categoryProduct',
    'as' =>'category-content'
]);

Route::get('contact-us',
[
 'uses'=> '\App\Http\Controllers\EshopController@contact',
    'as'=>'contact-us'

]);
Route::get('about',
    [
        'uses'=> '\App\Http\Controllers\EshopController@about',
        'as'=>'about'

    ]);

Route::get('product-details/{id}/{name}',
    [
        'uses'=> '\App\Http\Controllers\EshopController@single',
        'as'=>'single-product'

    ]);

Route::get('woman-products',
    [
        'uses'=> '\App\Http\Controllers\EshopController@WomanProduct',
        'as'=>'woman-content'

    ]);

Route::get('dashboard/add-category',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@add',
        'as'=>'add-category',
        'middleware'=>'admin'

    ]);
Route::get('dashboard/manage-category',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@manage',
        'as'=>'manage-category',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/unpublished-category/{id}',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@unpublishedCategory',
        'as'=>'unpublished-category',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/published-category/{id}',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@publishedCategory',
        'as'=>'published-category',
        'middleware'=>'admin'

    ]);
Route::get('dashboard/edit-category/{id}',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@editCategory',
        'as'=>'edit-category',
        'middleware'=>'admin'

    ]);
Route::get('dashboard/delete-category/{id}',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@deleteCategory',
        'as'=>'delete-category',
        'middleware'=>'admin'

    ]);

Route::post('dashboard/new-category',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@save',
        'as'=>'new-category',
        'middleware'=>'admin'

    ]);

Route::post('dashboard/update-category',
    [
        'uses'=> '\App\Http\Controllers\CategoryController@update',
        'as'=>'update-category',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/add-brand',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@addBrand',
        'as'=>'add-brand',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/manage-brand',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@manageBrand',
        'as'=>'manage-brand',
        'middleware'=>'admin'

    ]);
Route::get('dashboard/edit-brand/{id}',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@editBrand',
        'as'=>'edit-brand',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/published-brand/{id}',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@publish',
        'as'=>'published-brand',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/unpublished-brand/{id}',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@unpublish',
        'as'=>'unpublished-brand',
        'middleware'=>'admin'

    ]);
Route::get('dashboard/delete-brand/{id}',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@delete',
        'as'=>'delete-brand',
        'middleware'=>'admin'

    ]);

Route::post('dashboard/new-brand',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@save',
        'as'=>'new-brand',
        'middleware'=>'admin'

    ]);
Route::post('dashboard/update-brand',
    [
        'uses'=> '\App\Http\Controllers\ManufacturerController@update',
        'as'=>'update-brand',
        'middleware'=>'admin'

    ]);




Route::get('forms',
    [
        'uses'=> '\App\Http\Controllers\EshopController@forms',
        'as'=>'forms'

    ]);



Route::get('dashboard/add-product',
    [
        'uses'=> '\App\Http\Controllers\ProductController@add',
        'as'=>'add-product',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/manage-product',
    [
        'uses'=> '\App\Http\Controllers\ProductController@manage',
        'as'=>'manage-product',
        'middleware'=>'admin'

    ]);

Route::post('dashboard/new-product',
    [
        'uses'=> '\App\Http\Controllers\ProductController@save',
        'as'=>'new-product',
        'middleware'=>'admin'
    ]);






Route::get('dashboard/unpublished-product/{id}',
    [
        'uses'=> '\App\Http\Controllers\ProductController@unpublishedProduct',
        'as'=>'unpublished-product',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/published-product/{id}',
    [
        'uses'=> '\App\Http\Controllers\ProductController@publishedProduct',
        'as'=>'published-product',
        'middleware'=>'admin'

    ]);
Route::get('dashboard/edit-product/{id}',
    [
        'uses'=> '\App\Http\Controllers\ProductController@editProduct',
        'as'=>'edit-product',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/view-product/{id}',
    [
        'uses'=> '\App\Http\Controllers\ProductController@viewProduct',
        'as'=>'view-product',
        'middleware'=>'admin'

    ]);

Route::get('dashboard/delete-product/{id}',
    [
        'uses'=> '\App\Http\Controllers\ProductController@deleteProduct',
        'as'=>'delete-product',
        'middleware'=>'admin'

    ]);

Route::post('dashboard/update-product',
    [
        'uses'=> '\App\Http\Controllers\ProductController@updateProduct',
        'as'=>'update-product',
        'middleware'=>'admin'

    ]);



Route::post('cart/add',
    [
        'uses'=> '\App\Http\Controllers\CartController@addToCart',
        'as'=>'add-to-cart'

    ]);

Route::get('cart/show',
    [
        'uses'=> '\App\Http\Controllers\CartController@showCart',
        'as'=>'show-cart'

    ]);

Route::get('cart/delete-cart-item/{rowId}',
    [
        'uses'=> '\App\Http\Controllers\CartController@deleteCart',
        'as'=>'delete-cart-item'

    ]);



Route::post('cart/update-cart-minus',
    [
        'uses'=> '\App\Http\Controllers\CartController@updateCartMinus',
        'as'=>'cart-item-minus'

    ]);


Route::post('cart/update-cart-plus',
    [
        'uses'=> '\App\Http\Controllers\CartController@updateCartPlus',
        'as'=>'cart-item-plus'

    ]);


Route::post('cart/update-cart',
    [
        'uses'=> '\App\Http\Controllers\CartController@updateCart',
        'as'=>'update-cart'

    ]);

Route::get('Customer-Panel',
    [
        'uses'=> '\App\Http\Controllers\CheckoutController@checkout',
        'as'=>'checkout'

    ]);



Route::get('checkout/shipping/',
    [
        'uses'=> '\App\Http\Controllers\CheckoutController@shipping',
        'as'=>'checkoutShipping'

    ]);

Route::post('checkout/shipping/',
    [
        'uses'=> '\App\Http\Controllers\CheckoutController@newshipping',
        'as'=>'new-shipping'

    ]);



Route::get('checkout/payment',
    [
        'uses'=> '\App\Http\Controllers\CheckoutController@payment',
        'as'=>'payment'

    ]);
Route::post('checkout/ConfirmOrder',
    [
        'uses'=> '\App\Http\Controllers\CheckoutController@confirmOrder',
        'as'=>'confirm-order'

    ]);

Route::get('complete/order',
    [
        'uses'=> '\App\Http\Controllers\CheckoutController@orderSuccess',
        'as'=>'order-success'

    ]);


Route::post('customer-signup',
    [
        'uses'=> '\App\Http\Controllers\CustomerController@signup',
        'as'=>'customer-signup'

    ]);

Route::post('customer-login',
    [
        'uses'=> '\App\Http\Controllers\CustomerController@login',
        'as'=>'customer-login'

    ]);
Route::get('Customer-Logout',
    [
        'uses'=> '\App\Http\Controllers\CustomerController@logout',
        'as'=>'customer-logout'

    ]);

Route::get('dashboard/orders',
    [
        'uses'=> '\App\Http\Controllers\OrderController@view',
        'as'=>'view-orders'

    ]);


Route::get('dashboard/orders/details/{id}',
    [
        'uses'=> '\App\Http\Controllers\OrderController@details',
        'as'=>'view-order-detail'

    ]);

Route::get('dashboard/orders/invoice/{id}',
    [
        'uses'=> '\App\Http\Controllers\OrderController@invoice',
        'as'=>'view-invoice'

    ]);
Route::get('dashboard/orders/invoice/download/{id}',
    [
        'uses'=> '\App\Http\Controllers\OrderController@download',
        'as'=>'download-order-invoice'

    ]);


Route::get('ajax/email/check/{id}',
    [
        'uses'=> '\App\Http\Controllers\CheckoutController@emailcheck',
        'as'=>'email-check'

    ]);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
