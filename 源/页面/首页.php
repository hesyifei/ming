<?php

declare(strict_types=1);

$标题 = "首页";
$描述 = "这是首页";

require_once(__DIR__ . "/../页面结构/页首.php");

$测试词语 = new 词语("virtual reality");

var_dump($测试词语->的英文原名()->的名字());

var_dump($测试词语->的名称——类别(词语类别::中文自创缩写()));

var_dump($测试词语->的名称——名字("VR")->的类别());

var_dump($测试词语->的百度百科链接());

//var_dump($测试词语);
