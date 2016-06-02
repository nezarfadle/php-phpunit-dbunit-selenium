<?php  namespace Tests;

use Articles\ArticleModel;

class ArticleModelTest extends \PHPUnit_Framework_TestCase
{
	public function test_MustPass()
	{
		$uow = new ArticleModel("PHP");
		$this->assertEquals( "PHP", $uow->title() );
	}
}