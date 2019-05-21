<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/21
 * Time: 22:25
 */
namespace app\admin;
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
    }

    public function addData(array $data) :void
    {
        $this->data += $data;
    }
}