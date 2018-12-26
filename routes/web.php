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

// 用户模块
// 注册页面
Route::get('/register', '\App\Http\Controllers\RegisterController@index');
// 注册行为
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
// 登录页面
Route::get('/login', '\App\Http\Controllers\LoginController@index')->name('login');
// 登录行为
Route::post('/login', '\App\Http\Controllers\LoginController@login');

// 文章列表页
Route::get('/posts','\App\Http\Controllers\PostController@index');

Route::group(['middleware'=>'auth:web'], function(){
    // 登出行为
    Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
    // 个人设置页面
    Route::get('/user/{user}/setting', '\App\Http\Controllers\UserController@setting');
    // 个人设置操作
    Route::post('/user/{user}/setting', '\App\Http\Controllers\UserController@settingStore');



    // 创建文章
    Route::get('/posts/create','\App\Http\Controllers\PostController@create');
    Route::post('/posts','\App\Http\Controllers\PostController@store');

    // 搜索页面
    Route::get('/posts/search', '\App\Http\Controllers\PostController@search');
    // 文章详情页
    Route::get('/posts/{post}','\App\Http\Controllers\PostController@show');

    // 编辑文章
    Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
    Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');

    // 删除文章
    Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');

    // 图片上传
    Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');

    // 提交评论
    Route::post('/posts/{post}/comment', '\App\Http\Controllers\PostController@comment');

    // 赞
    Route::get('/posts/{post}/zan', '\App\Http\Controllers\PostController@zan');
    // 取消赞
    Route::get('/posts/{post}/unzan', '\App\Http\Controllers\PostController@unzan');

    // 个人中心
    Route::get('/user/{user}', '\App\Http\Controllers\UserController@show');
    // 关注用户
    Route::post('/user/{user}/fan', '\App\Http\Controllers\UserController@fan');
    // 取消关注
    Route::post('/user/{user}/unfan', '\App\Http\Controllers\UserController@unfan');

    // 专题详情页
    Route::get('/topic/{topic}', '\App\Http\Controllers\TopicController@show');
    Route::post('/topic/{topic}/submit', '\App\Http\Controllers\TopicController@submit');
});

require_once('admin.php');



