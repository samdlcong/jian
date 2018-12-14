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
// 文章列表页
Rotue::get('/posts','\App\Http\Controllers\PostController@index');
// 文章详情页
Rotue::get('/posts/{post}','\App\Http\Controllers\PostController@show');
// 创建文章
Rotue::get('/posts/create','\App\Http\Controllers\PostController@create');
Rotue::post('/posts','\App\Http\Controllers\PostController@store');