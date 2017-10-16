<?php

namespace App\Backend\Controllers;

use App\Backend\Controllers\Controllers;

class LoginController extends Controller
{
    //登陆页面
    public function index()
    {
        return view('backend.login.index');
    }

    //登陆处理
    public function login()
    {

    }

    //登出
    public function logout()
    {

    }
}
