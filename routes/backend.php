<?php

/**
 * 后台路由
 */
Route::group(['prefix' => 'backend'], function (){
    //登陆
    Route::get('login', '\App\Backend\Controllers\LoginController@index')->name('login');
    //登陆处理
    Route::post('login', '\App\Backend\Controllers\LoginController@login');
    //登出
    Route::get('logout', '\App\Backend\Controllers\LoginController@logout');

    //后台首页
    Route::get('/home', '\App\Backend\Controllers\BackendController@index')->name('admin');
    Route::get('/', '\App\Backend\Controllers\BackendController@index');
    //Route::resource();
});