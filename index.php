<?php

declare(strict_types=1);

require_once(__DIR__ . "/源/辅助/常量.php");
require_once(——源——页面结构目录—— . "/初始化.php");

$被解析的网址 = parse_url($_SERVER['REQUEST_URI']);
$网址路径 = urldecode($被解析的网址["path"]);

$查询字串 = substr($网址路径, 1); // 移除开头的“/”

if (empty($查询字串)) {
	require_once(——源——页面目录—— . "/首页.php");
} else if (!array_key_exists($查询字串, $名字配对英文原名关联数组)) {
	require_once(——源——页面目录—— . "/404.php");
} else {
	$查询字串——英文原名 = $名字配对英文原名关联数组[$查询字串];
	require_once(——源——页面目录—— . "/词语页.php");
}
