<?php

declare(strict_types=1);

class 词语
{
	/**
	 * 储存所有名称。键名为默认数字。
	 * @var 名称[]
	 */
	private array $所有名称——原始;
	/**
	 * 用来通过类别检索对应名称。键名为“词语类别”的键值。
	 * 类别是int[][]是因为一个类别可以对应多个名称。
	 * @var int[][]
	 */
	private array $所有名称——类别索引;
	/**
	 * 用来通过名字检索对应名称。键名为名字。
	 * 类别是int[]是因为一个类别仅可对应一个名称。
	 * @var int[]
	 */
	private array $所有名称——名字索引;

	private string $维基百科条目名;
	private string $百度百科条目名;

	function __construct(string $英文原名)
	{
		$YAML内容 = 载入YAML数据($英文原名);

		$this->维基百科条目名 = $YAML内容["维基百科条目名"];
		$this->百度百科条目名 = $YAML内容["百度百科条目名"];

		$英文原名 = new 名称($YAML内容["英文原名"], 词语类别::英文原名(), null);
		$this->加入名称至所有名称及相关索引($英文原名);

		foreach ($YAML内容["别名"] as $名字 => $资料) {
			$类别字串 = $资料["类别"];
			$类别 = 词语类别::$类别字串();

			$参考 = $资料["参考"] ?? null;
			$别名名称 = new 名称($名字, $类别, $参考);

			$this->加入名称至所有名称及相关索引($别名名称);
		}
	}

	private function 加入名称至所有名称及相关索引(名称 $名称)
	{
		$this->所有名称——原始[] = $名称;
		$新加入名称的原始索引编号 = count($this->所有名称——原始) - 1;
		$this->所有名称——名字索引[$名称->的名字()] = $新加入名称的原始索引编号;
		$this->所有名称——类别索引[$名称->的类别()->getValue()][] = $新加入名称的原始索引编号;
	}

	public function 的英文原名(): 名称
	{
		// TODO: 如果不止一个英文原名呢？
		return $this->的名称——类别(词语类别::英文原名())[0];
	}

	/**
	 * @return 名称[]
	 */
	public function 的所有名称(): array
	{
		return $this->所有名称——原始;
	}

	/**
	 * @return 名称[]
	 */
	public function 的名称——类别(词语类别 $类别): array
	{
		$所有原始索引编号 = $this->所有名称——类别索引[$类别->getValue()];
		$所有相关名称 = [];
		foreach ($所有原始索引编号 as $原始索引编号) {
			$所有相关名称[] = $this->所有名称——原始[$原始索引编号];
		}
		return $所有相关名称;
	}

	public function 的名称——名字(string $名字): ?名称
	{
		return $this->所有名称——原始[$this->所有名称——名字索引[$名字]];
	}

	public function 的维基百科条目名(): string
	{
		return $this->维基百科条目名;
	}
	public function 的维基百科链接(): string
	{
		return "https://zh.wikipedia.org/wiki/" . $this->的维基百科条目名();
	}

	public function 的百度百科条目名(): string
	{
		return $this->百度百科条目名;
	}
	public function 的百度百科链接(): string
	{
		return "https://baike.baidu.com/item/" . $this->的百度百科条目名();
	}
}
