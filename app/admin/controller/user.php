<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;

use app\admin\base;

class user extends base
{
    public function index()
    {
        return view('index', $this->data);
    }

    public function info()
    {
        return view('info', $this->data);
    }
}
