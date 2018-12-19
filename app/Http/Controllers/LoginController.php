<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    // 登录页面
    public function index()
    {
        return view("login.index");
    }

    // 登录行为
    public function login()
    {
        $this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required|min:6|max:32',
            'is_remember'=>'integer'
        ]);

        $user = request(['email', 'password']);
        $is_remember = boolval(request('is_remember'));
        if(Auth::attempt($user, $is_remember)){
            return redirect('/posts');
        }

        return Redirect::back()->withErrors("账号与密码不匹配");
    }

    // 登出行为
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
