<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/28
 * Time: 上午11:52
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

return [
    // 数据库配置
    'database' => [
        'write' => [
            'type'     => 'mysql',
            'host'     => '127.0.0.1',
            'port'     => 3306,
            'user'     => 'root',
            'pwd'      => '123456',
            'charset'  => 'utf8',
            'dbname'     => 'typecho',
            'prefix'   => 'tp_'
        ],
        'read' => [
            'type'     => 'mysql',
            'host'     => '127.0.0.1',
            'port'     => 3306,
            'user'     => 'root',
            'pwd'      => '123456',
            'charset'  => 'utf8',
            'dbname'     => 'typecho',
            'prefix'   => 'tp_'
        ],
    ],
    // 存储配置
    'storage' => [
        'write' => [
            'type' => 'redis',
            'host' => '11.11.11.11',
            'port' => 6379
        ],
    ],
    'dynamic' => [
        'path' => '%root.path%',
        'custom' => '%name%'
    ],
];