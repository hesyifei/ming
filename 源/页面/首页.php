<?php

declare(strict_types=1);

$标题 = "首页";
$描述 = "这是首页";

require_once(——源——页面结构目录—— . "/页首.php");

?>
欢迎！我们有这些词：
<?php
foreach ($英文原名配对所有别名关联数组 as $英文原名 => $所有别名名字) {
?>
	<p>
		<strong><?php echo $英文原名; ?></strong>：<?php echo implode("／", $所有别名名字) ?>
		（<a href="/<?php echo $英文原名 ?>">查看详情</a>）
	</p>
<?php
}
