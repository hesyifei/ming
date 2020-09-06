<?php

declare(strict_types=1);

function 载入YAML文件(string $文件路径): array
{
	return yaml_parse_file("数据/central processing unit.yaml");
}
