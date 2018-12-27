<?php
/**
 * LoginController.php
 * Created by Samdlcong
 * Created at 2018/12/26 22:24
 */

namespace App\Admin\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function  index()
    {
        return view('admin/login/index');
    }

    public function login()
    {
        $this->validate(request(),[
            'name'=>'required|min:2',
            'password'=>'required|min:6|max:32'
        ]);

        $user = request(['name', 'password']);

        if(Auth::guard('admin')->attempt($user))
        {
            return redirect('admin/home');
        }

        return Redirect::back()->withErrors('用户名密码不匹配');
    }

    public function logout()
    {
        AutH::guard('admin')->logout();
        return \redirect('admin/login');
    }
}