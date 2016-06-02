<?php  namespace Articles;

class ArticleDao
{
	private $pdo;

	public function __construct()
	{
		$this->pdo = new \PDO('mysql:host=localhost;dbname=unittestingdb', 'root', 'password', [
			\PDO::ATTR_ERRMODE 				=> \PDO::ERRMODE_EXCEPTION,
			\PDO::ATTR_DEFAULT_FETCH_MODE 	=> \PDO::FETCH_OBJ
		]);
	}

	function insert($title)
	{
		$s = $this->pdo->prepare("INSERT INTO articles(title) values(:t)");
		$s->bindParam(':t', $title);
		$s->execute();
	}
}