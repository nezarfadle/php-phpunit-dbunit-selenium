<?php namespace Tests;

/**
 * Database Testing 
 */

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
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/articles.seed.xml');
        // return new \PHPUnit_Extensions_Database_DataSet_DefaultDataSet(); // Uncomment this line in case if you want an empty DataSet
    }

    public function testInsertNewArticle()
    {

    	$uow = new ArticleDao();
    	$rowsCount = $this->getConnection()->getRowCount('articles'); // Rows count in the articles table should be 3
    	$this->assertEquals( $this::TOTALROWSCOUNT, $rowsCount);

    	$uow->insert("Java"); // insert new record in the database

    	$rowsCount = $this->getConnection()->getRowCount('articles');
    	$this->assertEquals( $this::TOTALROWSCOUNT + 1, $rowsCount); // Rows count in the articles table should be 4
    }

}