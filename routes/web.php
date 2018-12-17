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
    //shangpinwenzhang
    Route::resource('admin/notice','Admin\NoticeController');
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
    //友情链接
    Route::resource('admin/links','Admin\LinksController');


    //商品管理
    Route::resource('admin/goods','Admin\GoodsController');
    Route::resource('admin/photos','Admin\PhotosController');
    Route::any('/admin/uploadphotos','Admin\PhotosController@upload');

    Route::resource('admin/gmiddle','Admin\GmiddleController');
    Route::any('/admin/uploadgmiddle','Admin\GmiddleController@upload');

    //yemiandingtaihua
    Route::any('/admin/uploadad','Admin\AdController@upload');
    Route::any('/admin/uploadconf','Admin\ConfController@upload');
    Route::any('/admin/uploadlinks','Admin\LinksController@upload');
      //网站配置
    Route::resource('admin/conf','Admin\ConfController');

    //前台用户管理
    Route::resource('admin/users','Admin\UsersController');


});

//用户权限提示页面
    Route::get('/admin/remind','Admin\UserController@remind');


//前台luyou
Route::group([],function(){

    Route::get('/', 'Home\IndexController@index');
    Route::get('home/xq','Home\XqController@xq');

    Route::get('/', 'Home\IndexController@index');
    Route::get('home/xq/{id}','Home\XqController@xq');
    Route::get('home/cate','Home\XqController@store');

});
     //前台用户注册
    Route::get('home/register','Home\RegisterController@register');
    Route::post('home/checkmail','Home\RegisterController@checkmail');
    Route::get('home/success','Home\RegisterController@success');
    //前台用户登录
    Route::any('home/login','Home\LoginController@login');
    Route::any('home/dologin','Home\LoginController@dologin');
    Route::get('home/forget','Home\LoginController@forget');
    Route::get('home/out','Home\LoginController@out');
    //忘记密码

    Route::post('home/doforget','Home\LoginController@doforget');
    Route::post('home/checkphone','Home\LoginController@checkphone');
    Route::get('home/checkcode','Home\LoginController@checkcode');
    Route::any('home/fgpass','Home\PassController@fgpass');
    Route::any('home/xpass','Home\PassController@xpass');
    Route::get('/index', 'Home\IndexController@index');
    //前台首页footer
    Route::get('/notice/article/{id}','Home\NoticeController@index');
    //前台导航nav
    Route::get('/home/goodstype/{id}','Home\GoodstypeController@index');
    //前台大分类 father
    Route::get('/home/goodsfather/{id}','Home\GoodstypeController@father');
    //前台大分类 son
    Route::get('/home/goodsson/{id}','Home\GoodstypeController@son');


