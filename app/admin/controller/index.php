<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;

use app\admin\base;

class index extends base
{
    /**
     * @api 首页
     * @return \think\response\View
     */
    public function index()
    {
        return view('index', $this->data);
    }
}
