<?php

namespace app\ctrl;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data = 'Hello World';
        $this->assign('data', $data);
        $this->display('index.html');
    }
}