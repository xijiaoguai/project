<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/21
 * Time: 22:25
 */
namespace app\admin;
use app\admin\controller\menu;
use app\common\model\admin_menu;
use think\App;
use think\Controller;

class base extends Controller
{
    public $data;

    public function __construct(App $app = null)
    {
        parent::__construct($app);
        $this->data['title'] = APP_TITLE;
        $this->data['date'] = date('Y-m-d H:i:s');
        $this->data['logoName'] = LOGO_NAME;
        $this->data['menuList'] = $this->getMenuList();
    }

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
        foreach ($array as $value) {
            if ($value['parent_id'] == $pid) {
                $childList = $this->getTree($array, $value['id']);
                $value['isShow'] = false;
                $value['active'] = false;
                foreach ($childList as &$child) {
                    if (url($child['url']) == url()){
                        $child['active'] = true;
                        $value['isShow'] = true;
                        break;
                    }
                }
                $value['children'] = $childList;
                $list[] = $value;
            }
        }
        return $list;
    }
}