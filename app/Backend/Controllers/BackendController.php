<?php
/**
 * Created by PhpStorm.
 * 后台入口文件
 * user: RickSun sunwgjj@126.com
 */
namespace App\Backend\Controllers;

use Illuminate\Http\Request;
use App\Backend\Controllers\Controllers;

class BackendController extends Controller
{
    //入口
    public function index(){
        return view('backend.layouts.main');
    }
}
