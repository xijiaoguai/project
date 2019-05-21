<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;

class login
{
    public function index()
    {
        return view('index',['param'=>'World']);
    }

    public function login()
    {
        return 'login';
    }

    public function logout()
    {
        return 'logout';
    }
}
