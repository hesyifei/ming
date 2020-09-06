<?php

declare(strict_types=1);

$标题 = "不用英文缩写真的不行吗？";
$描述 = "“中处器”、“增实”、“拟实”、“内生总”、“美篮协”是什么？我们一定要用CPU、AR、VR、GDP、NBA吗？";

require_once(——源——页面结构目录—— . "/页首.php");
?>

<?php
// TODO: 暂时这样放
require_once(——项目根目录—— . "/why.html");
?>

<hr />
欢迎！本站目前有这些词：
<?php
foreach ($英文原名配对所有别名关联数组 as $英文原名 => $所有别名名字) {
?>
	<p>
		<strong><?php echo $英文原名; ?></strong>：<?php echo implode("／", $所有别名名字) ?>
		（<a href="/<?php echo $英文原名 ?>">查看详情</a>）
	</p>
<?php
}
