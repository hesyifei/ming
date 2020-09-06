<?php

declare(strict_types=1);

require_once(__DIR__ . "/源/页面结构/初始化.php");

echo $_SERVER['REQUEST_URI'];

require_once(__DIR__ . "/源/页面/首页.php");
