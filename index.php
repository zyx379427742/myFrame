<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */

define('IMOOC', realpath(__DIR__));     //定义当前框架所在的根目录
define('CORE', IMOOC.'/core');          //定义框架核心文件所处的目录
define('APP', IMOOC.'/app');            //定义项目文件所处的目录
define('MODULE', 'app');

define('DEBUG', true);                  //定义是否开启调试模式
if (DEBUG) {
    ini_set('display_error', 'On');
} else {
    ini_set('display_errors', 'Off');
}

include CORE.'/common/function.php';    //加载函数库

include CORE.'/imooc.php';              //加载框架核心文件

//加载路由类，三个步骤
spl_autoload_register('\core\imooc::load');   //new一个类，当类不存在时触发这个方法

\core\imooc::run();