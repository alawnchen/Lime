<?php

// 加载 Lime 框架
require '../../Lime/Lime.php';

// 生成一个 Lime 应用实例
$app = new \Lime\Lime([
    'views.path'    => __DIR__ . '/views',
]);

// 定义一个 HTTP GET 请求路由：
$app->get('/', function() {
    return view('index.php');
});

// 执行 Lime 应用
$app->run();