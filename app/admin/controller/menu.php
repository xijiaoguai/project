<?php
/**
 * Created by PhpStorm.
 * User: 25791
 * Date: 2019/5/19
 * Time: 15:37
 */

namespace app\admin\controller;

use app\admin\base;
use app\common\model\admin_menu;

class menu extends base
{
    public function getMenuList()
    {
        $menuData = admin_menu::order(['level', 'rank'])
            ->select()
            ->toArray();
        $menuList = $this->getTree($menuData);
        return $menuList;
    }

    public function getTree($array, $pid = 0)
    {
        $list = [];
        foreach ($array as $key => $value) {
            if ($value['parent_id'] == $pid) {
                $childList = $this->getTree($array, $value['id']);
                $value['children'] = $childList;
                $list[] = $value;
            }
        }
        return $list;
    }
}
