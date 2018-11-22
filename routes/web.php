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
    return view('index');
});
//后台admin
Route::any('/index',"admin@admin");
Route::any('/console',"admin@console");
Route::any('/user',"admin@user");
//登录
Route::any('/login',"admin@login");
//退出
Route::any('/out',"admin@out");
Route::any('/logindo',"admin@logindo");
//评论列表
Route::any('/plist',"admin@plist");
Route::any('/pl_up',"admin@pl_up");
Route::any('/form',"admin@form");
//前台首页
Route::any('/show',"index@index");
Route::any('/p_list',"index@p_list");
Route::any('/postinfo',"index@info");
Route::any('/geninfo',"index@geninfo");
//悬赏
Route::any('/xs',"index@xs");
Route::any('/xsadd',"index@xsadd");
//添加
Route::any('/addpost',"index@addpost");
Route::any('/addpost_do',"index@addpost_do");
Route::any('/com_add',"index@com_add");
Route::any('/com_adddo',"index@com_adddo");
Route::any('/genadd',"index@genadd");
Route::any('/gen_adddo',"index@gen_adddo");

//热点
Route::any('/hot_list',"red@hot_list");
