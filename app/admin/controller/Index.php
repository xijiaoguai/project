<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;

use app\common\enum\app;

class index
{
    public function index()
    {
        return view('index',['title'=>app::TITLE_NAME]);
    }
}
