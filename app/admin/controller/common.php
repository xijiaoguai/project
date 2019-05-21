<?php

namespace app\admin\controller;

use app\common\enum\app;

class common
{
    public function top()
    {
        return view('top', ['title' => app::TITLE_NAME]);
    }

    public function header()
    {
        $data['date'] = date("Y-m-d H:i:s");
        return view('header', $data);
    }

    public function footer()
    {
        return view('footer', ['param' => 'footer']);
    }

    public function nav()
    {
        return view('nav', ['param' => 'nav']);
    }
}
