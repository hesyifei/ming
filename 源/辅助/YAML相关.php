<?php

declare(strict_types=1);

function 载入YAML文件(string $文件路径): array
{
	return yaml_parse_file($文件路径);
}

function 载入YAML数据(string $英文原名): array
{
	return 载入YAML文件(——词语数据目录—— . "/" . $英文原名 . ".yaml");
}
