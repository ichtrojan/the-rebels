<?php
/**
* Upload Packages
*/
class UploadPackages extends Database
{
	protected $host = "localhost";
	protected $user = "root";
	protected $pass = "";
	protected $db = "test_db";

	protected $plug;

	public function __construct() {
		// database connections
		$this->plug = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

		if(mysqli_connect_error()){
			return "Fail to connect to databse ";
		}
	}

	public function save($name, $desc, $type, $price, $location, $duration, $contact, $images){
		// tags and dates
		$tags = "";
		$date = time();

		// convert to strings
		$images = implode(',', $images);

		// insert data into the packages table
		$query = " INSERT INTO packages(NULL, $name, $desc, $type, $price, $location, $duration, $contact, $images, $tags, $date) ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			echo "Error running insert query ".mysqli_error($this->plug);
		}else{
			$back = $_SERVER['HTTP_REFERER'];
			header('Location: '.$back);
		}
	}
}
?>