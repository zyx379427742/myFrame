<?php

namespace app\ctrl;
class indexCtrl extends \core\imooc
{
    public function index()
    {
//        $temp = new \core\lib\model();
//        $temp = \core\lib\conf::get('CTRL', 'route');
//        print_r($temp);die;

        $data = 'Hello World';
        $this->assign('data', $data);
        $this->display('index.html');
    }
}