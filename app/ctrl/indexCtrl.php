<?php

namespace app\ctrl;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        p('it is index');
        $model = new \core\lib\model();
        $sql = "SELECT * FROM c";
        $res = $model->query($sql);
        p($res->fetchAll());
    }
}