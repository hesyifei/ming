<?php
class 名称
{
	private string $名字;
	private 词语类别 $类别;
	private ?string $参考;

	function __construct(string $名字, 词语类别 $类别, ?string $参考)
	{
		$this->名字 = $名字;
		$this->类别 = $类别;
		$this->参考 = $参考;
	}

	public function 的名字(): string
	{
		return $this->名字;
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
