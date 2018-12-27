<?php
/**
 * HomeController.php
 * Created by Samdlcong
 * Created at 2018/12/26 22:24
 */

namespace App\Admin\Controllers;


class HomeController extends Controller
{
    protected  $loginPath = 'admin/login';

    public function index()
    {
        return view('admin/home/index');
    }


}