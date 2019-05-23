<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;

use app\admin\base;

class login extends base
{
    public function index()
    {
        return view('index',$this->data);
    }

    public function login()
    {
        return 'login';
    }

    public function logout()
    {
        return view('index',$this->data);
    }
}
