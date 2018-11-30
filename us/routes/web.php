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
//后台登录

Route::any('/admin/login','Admin\LoginController@login');
Route::any('/admin/dologin','Admin\LoginController@dologin');
Route::any('/admin/captcha','Admin\LoginController@captcha');

Route::any('/admin/profile','Admin\LoginController@profile');
Route::any('/admin/upload','Admin\LoginController@upload');
Route::any('/admin/passchange','Admin\LoginController@passchange');
Route::any('/admin/xpass','Admin\LoginController@xpass');
Route::any('/admin/logout','Admin\LoginController@logout');

Route::group(['middleware'=>'login'], function(){

    //后台的首页
    Route::get('/admin', 'Admin\IndexController@index');

    //后台的用户管理
    Route::resource('admin/user',"Admin\UserController");

    /*Route::get('/admin/usajax','Admin\UserController@ajaxupdate');*/
    //给用户添加角色
    Route::any('/admin/user_role','Admin\UserController@user_role');
    Route::any('/admin/do_user_role','Admin\UserController@do_user_role');

    //角色管理
    Route::resource('admin/role',"Admin\RoleController");
    Route::any('/admin/role_per','Admin\RoleController@role_per');
    Route::any('/admin/do_role_per','Admin\RoleController@do_role_per');

    //权限管理
    Route::resource('admin/permission',"Admin\PermissionController");



    //分类管理
    Route::resource('admin/cate','Admin\CateController');
    //订单
    Route::resource('admin/order','Admin\OrderController');



    //商品栏目guanli
    Route::resource('admin/noticecate','Admin\NoticecateController');
    //导航
    Route::resource('admin/nav','Admin\NavController');
    //商品属性
    Route::resource('admin/goodsattr','Admin\GoodsattrController');
     //商品类型
    Route::resource('admin/goodstype','Admin\GoodstypeController');
    //商品品牌
    Route::resource('admin/goodsbrand','Admin\GoodsbrandController');
    //轮播图
    Route::resource('admin/ad','Admin\AdController');
     //轮播图
    Route::resource('admin/links','Admin\LinksController');


    //商品管理
    Route::resource('admin/goods','Admin\GoodsController');
    Route::resource('admin/photos','Admin\PhotosController');
});

//用户权限提示页面
    Route::get('/admin/remind','Admin\UserController@remind');

