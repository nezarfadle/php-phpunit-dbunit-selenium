<?php  namespace Articles;

class ArticleModel 
{
	private $title;

	public function __construct($t)
	{
		$this->title = $t;
	}

	public function title()
	{
		return $this->title;
	}
}