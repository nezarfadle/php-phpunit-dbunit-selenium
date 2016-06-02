<?php namespace Tests;

use Articles\ArticleDao;

class ArticleDaoTest extends \PHPUnit_Extensions_Database_TestCase
{

	const TOTALROWSCOUNT = 3;
	public function getConnection()
    {
        $pdo = new \PDO('mysql:host=localhost;dbname=unittestingdb', 'root', 'password');
        return $this->createDefaultDBConnection($pdo);
    }

    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/articles.xml');
        // return new \PHPUnit_Extensions_Database_DataSet_DefaultDataSet();
    }

    public function testInsertNewArticle()
    {

    	$uow = new ArticleDao();
    	$count = $this->getConnection()->getRowCount('articles');
    	$this->assertEquals( $this::TOTALROWSCOUNT, $count);

    	$uow->insert("Java");

    	$count = $this->getConnection()->getRowCount('articles');
    	$this->assertEquals( $this::TOTALROWSCOUNT + 1, $count);
    }

}