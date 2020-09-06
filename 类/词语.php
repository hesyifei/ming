<?php
class 词语
{
	/** @var 名称[] */
	private array $所有名称;

	private string $维基百科条目名;
	private string $百度百科条目名;

	function __construct(string $YAML文件路径)
	{
		$YAML内容 = 载入YAML文件($YAML文件路径);

		$this->维基百科条目名 = $YAML内容["维基百科条目名"];
		$this->百度百科条目名 = $YAML内容["百度百科条目名"];

		$英文原名类别 = 词语类别::英文原名();
		$英文原名 = new 名称($YAML内容["英文原名"], $英文原名类别, null);

		$所有名称 = [
			$英文原名类别->getValue() => $英文原名,
		];

		foreach ($YAML内容["别名"] as $名称 => $资料) {
			$类别字串 = $资料["类别"];
			$类别 = 词语类别::$类别字串();

			$参考 = $资料["参考"] ?? null;
			$别名 = new 名称($名称, $类别, $参考);

			$所有名称[$类别->getValue()] = $别名;
		}

		$this->所有名称 = $所有名称;
	}

	function 的英文原名(): 名称
	{
		return $this->的别名(词语类别::英文原名());
	}

	function 的别名(词语类别 $类别): 名称
	{
		return $this->所有名称[$类别->getValue()];
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
