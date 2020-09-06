<?php
class 名称
{
	private string $名称;
	private 词语类别 $类别;
	private ?string $参考;

	function __construct(string $名称, 词语类别 $类别, ?string $参考)
	{
		$this->名称 = $名称;
		$this->类别 = $类别;
		$this->参考 = $参考;
	}

	public function 的名称(): string
	{
		return $this->名称;
	}

	public function 的类别(): string
	{
		return $this->类别;
	}

	public function 的参考(): ?string
	{
		return $this->参考;
	}
}
