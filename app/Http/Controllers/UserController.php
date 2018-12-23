<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 个人设置页面
    public function setting()
    {
        return view("user.setting");
    }

    // 个人设置操作
    public function settingStore()
    {

    }

    // 个人中心
    public function  show()
    {
        return view('user/show');
    }

    // 关注用户
    public function fan()
    {

    }

    // 取消关注
    public function unfan()
    {

    }
}
