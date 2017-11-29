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

Route::get('/', 'Home\IndexController@index');
Route::get('filtrate','Home\FiltrateController@index');
Route::get('filtrate/price','Home\FiltrateController@price');
Route::get('filtrate/newgoods','Home\FiltrateController@newgoods');
Route::get('filtrate/sales','Home\FiltrateController@sales');
Route::get('/search','Home\FiltrateController@search');
Route::get('discounts','Home\DiscountsController@index');
Route::get('details/{id}','Home\DetailsController@index');
Route::get('addvertising','Home\AddvertisingController@index');
Route::get('list','Home\CatelistController@index');
Route::get('/jump','JumpController@index');

###后台###
    ###登陆###

Route::any('admin/login','Admin\LoginController@index');

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin.islogin'],function(){
    Route::get('/','AdminController@index');
    ###商品管理####
    Route::resource('goods', 'GoodsController');

});
//Route::get('/details','Home\DetailsController@index')
