<?php  namespace Tests;

/**
 * User-Interface Testing
 */

class IndexTest extends \PHPUnit_Extensions_Selenium2TestCase
{
	public static $browsers = [
		['browserName' => 'phantomjs'],	
		// ['browserName' => 'firefox'], // Uncomment this line if you want to test your code with Firefox
	];
	protected function setUp()
    {
        // $this->setBrowser('phantomjs');
        $this->setBrowserUrl('http://localhost:9090');
    }
	public function testLandingPageHasAwelcomeMessage()
	{
		$this->url('index.php');
        $content = $this->byTag('h1')->text();
        $this->assertEquals('Wecloem to my site', $content);
	}
}