<?php
// inlcude the database class:
require ("database.php");

/**
* Upload Packages
*/
class UploadPackages extends Database
{
	protected $plug;

	public function __construct() {
		// call the database construct and plug the connection 
		parent::__construct();
		$this->plug = Database::plug();

	}

	public function save($name, $desc, $type, $price, $location, $duration, $contact, $images){
		// tags and dates
		$tags = "";
		$date = time();		

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