<?php
/**
 * admin.php
 *
 * Created by Samdlcong.
 * Created at 2018/12/26 15:48
 */

Route::group(['prefix'=>'admin'], function(){
    Route::get('login', function(){
       return "is login";
    });
});