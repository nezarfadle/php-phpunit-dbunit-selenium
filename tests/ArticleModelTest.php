<?php  namespace Tests;

/**
 * Unit Testing
 */

use Articles\ArticleModel;

class ArticleModelTest extends \PHPUnit_Framework_TestCase
{
	public function test_ArticleModelInitialization_ShouldPass()
	{
		$uow = new ArticleModel("PHP");
		$this->assertEquals( "PHP", $uow->title() );
	}
}