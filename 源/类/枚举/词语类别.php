<?php

use MyCLabs\Enum\Enum;

class 词语类别 extends Enum {
	private const 英文原名 = '英文原名';
	private const 英文缩写 = '英文缩写';
	private const 中文常见名 = '中文常见名';
	private const 中文自创缩写 = '中文自创缩写';
	private const 中文推荐译名 = '中文推荐译名'; // 来自“推荐使用外语词规范中文译名”
}
