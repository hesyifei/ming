<?php

declare(strict_types=1);

header('HTTP/1.0 404 Not Found');

$标题 = "找不到您的查询字串“" . $查询字串 . "”！";
$描述 = "找不到！";

require_once(——源——页面结构目录—— . "/页首.php");

echo "找不到您的查询字串“" . $查询字串 . "”！";

require_once(——源——页面结构目录—— . "/页尾.php");
