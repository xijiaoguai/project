<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;

use app\admin\base;
use app\common\model\admin_roles;

class admin extends base
{
    public function roles()
    {
        $this->data['adminRoles'] = admin_roles::select()->toArray();
        return view('roles', $this->data);
    }

    public function admins()
    {
        return view('admins', $this->data);
    }
}
