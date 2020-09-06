<?php

declare(strict_types=1);

$标题 = "词语：" . $查询字串;
$描述 = "什么是“" . $查询字串 . "”？";

require_once(——源——页面结构目录—— . "/页首.php");

$词语 = new 词语($查询字串——英文原名);

?>

<h1><?php echo $查询字串; ?></h1>

<p>
	这是“<?php echo $词语->的英文原名()->的名字(); ?>”，
	也叫做“<?php echo implode("”、“", $英文原名配对所有别名关联数组[$查询字串——英文原名]); ?>”。
</p>

<p>
	了解更多：
	<a href="<?php echo $词语->的百度百科链接() ?>" target="_blank" rel="nofollow">百度百科</a>、
	<a href="<?php echo $词语->的维基百科链接() ?>" target="_blank" rel="nofollow">维基百科</a>
</p>

<?php
require_once(——源——页面结构目录—— . "/页尾.php");
