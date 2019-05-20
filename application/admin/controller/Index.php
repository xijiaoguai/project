<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;
use app\common\model\User;

class Index
{
    public function index()
    {
        User::get(1);
        return view('index',['param'=>'World']);
    }
}
