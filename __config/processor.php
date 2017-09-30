<?php
/**
* Upload Packages
*/
class UploadPackages
{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $dbname = "test_db";

	private $dbh;
	private $error;

	public function __construct() {
		// Set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		// Set options
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		);
		// Create a new PDO instanace
		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}
		// Catch any errors
		 catch (PDOException $e) {
			$this->error = $e->getMessage();
		}
	}

	public function save($packages)
	{

		// save to database..
		// $query = " INSERT INTO packages(Null, )";
		// $this->dbh->exec($query);
		echo "Packages has been save !";
	}
}
?>