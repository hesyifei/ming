<?php

declare(strict_types=1);

$标题 = "词语";
$描述 = "这是词语";

require_once(——源——页面结构目录—— . "/页首.php");

$测试词语 = new 词语($查询字串——英文原名);

var_dump($测试词语->的英文原名()->的名字());

var_dump($测试词语->的名称——类别(词语类别::中文自创缩写()));

var_dump($测试词语->的名称——名字($查询字串)->的类别());

var_dump($测试词语->的百度百科链接());

//var_dump($测试词语);

require_once(——源——页面结构目录—— . "/页尾.php");
