<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
// 定义CMF根目录,可更改此目录
define('LOTUS_ROOT', __DIR__ . '/');
// 定义lotusAdmin 版本号
define('LOTUS_VERSION', '3.1.0');
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
?>

