<?php
/**
* Database Class
*/
class Database
{
	protected $host;
	protected $user;
	protected $pass;
	protected $db;
	
	function __construct()
	{
		# code...
		$this->host = "localhost";
		$this->user = "root";
		$this->pass = "";
		$this->database = "test_db";		
	}

	public function plug()
	{
		try {
			$plug = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		} catch (Exception $e) {
			return "Fail to connect to database ! ".$e;
		}
		return $plug;
	}
}
?>