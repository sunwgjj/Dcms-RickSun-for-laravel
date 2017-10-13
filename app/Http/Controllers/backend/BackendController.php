<?php
/**
 * Created by PhpStorm.
 * 后台入口文件
 * user: RickSun sunwgjj@126.com
 */
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    //入口
    public  function dashboard(){
        return view('backend.btzero.dashboard');
    }
}
