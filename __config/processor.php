<?php
/**
* Upload Packages
*/
class UploadPackages
{
	protected $host = "localhost";
	protected $user = "root";
	protected $pass = "";
	protected $db = "test_db";

	protected $plug;

	public function __construct() 
	{
		// database connections
		$this->plug = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

		if(mysqli_connect_error()){
			return "Fail to connect to databse ";
		}
	}

	// save upload packages
	public function save ($name, $desc, $type, $price, $location, $duration, $contact, $images)
	{
		// tags and dates
		$tags = " Vaction, Holidays, X-mass, Trips "; // it can be anything if we embed it on the form as check box
		$date = time();

		// convert to strings all images in arrays
		$images = implode(',', $images);

		// insert data into the packages table
		$query = " INSERT INTO packages(name, description, type, price, location, duration, contact, images, tags, dates) ";
		$query .= " VALUES('".$name."', '".$desc."', '".$type."', '".$price."', ";
		$query .= " '".$location."', '".$duration."', '".$contact."', '".$images."', '".$tags."', '".$date."' )";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			echo "Error running insert query ".mysqli_error($this->plug);
		}else{
			// get id before creating gallery
			$query = " SELECT id FROM packages WHERE(name ='".$name."' and description ='".$desc."' ) ";
			$query_run = mysqli_query($this->plug, $query);
			if(!$query_run){
				echo 'Error running select query '.mysqli_error($this->plug);
			}else{
				while ($result = mysqli_fetch_assoc($query_run)) {
					# code...
					$id = $result['id'];

					// create Gallery now
					$query = " INSERT INTO gallery(package_id, images, dates) ";
					$query .= " VALUES('".$id."', '".$images."', '".$date."') ";
					$query_run = mysqli_query($this->plug, $query);
					if(!$query_run){
						echo "Error running insert gallery query ".mysqli_error($this->plug);
					}else{
						$back = $_SERVER['HTTP_REFERER'];
						header('Location: '.$back);
					}
				}
			}
		}
	}

	// save upload packages
	public function lastUpload ()
	{
		// fetch last upload
		$query = " SELECT * FROM packages ORDER by id DESC LIMIT 1  ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			// return error if query fail
			echo "Error running query last upload ";
		}elseif(!mysqli_num_rows($query_run)){
			// last upload not found
			echo "No packages has been uploaded yet...!";
		}else{
			// fetch result into arrays
			while ($packages = mysqli_fetch_array($query_run))
			{
				return $packages;
			}		
		}
	}

	// save upload packages
	public function load ($id)
	{
		// fetch last upload
		$query = " SELECT * FROM packages WHERE(id = '".$id."') ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			// return error if query fail
			echo "Error running query last upload ";
		}elseif(!mysqli_num_rows($query_run)){
			// last upload not found
			echo "No packages has been uploaded yet...!";
		}else{
			// fetch result into arrays
			while ($packages = mysqli_fetch_array($query_run))
			{
				return $packages;
			}		
		}
	}

	// update changes from edit
	public function update($id, $name, $desc, $type, $price, $location, $duration, $contact)
	{
		// edit packages
		$query = " UPDATE packages SET name ='".$name."', ";
		$query .= " description ='".$desc."', type ='".$type."', ";
		$query .= " price = '".$price."', location ='".$location."', ";
		$query .= " duration ='".$duration."', contact ='".$contact."' ";
		$query .= " WHERE(id = '".$id."') ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			echo 'Error updating the packages '.mysqli_error($this->plug);
		}else{
			$back = $_SERVER['HTTP_REFERER'];
			header('Location: '.$back);
		}
	}

	// load last edited card
	public function loadLastEdit($id)
	{
		// fetch last upload
		$query = " SELECT * FROM packages WHERE(id ='".$id."') ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			// return error if query fail
			echo "Error running query last upload ";
		}elseif(!mysqli_num_rows($query_run)){
			// last upload not found
			echo "No packages has been uploaded yet...!";
		}else{
			// fetch result into arrays
			while ($packages = mysqli_fetch_array($query_run))
			{
				return $packages;
			}		
		}	
	}

	// delete card
	public function delete($id)
	{
		// delete packages
		$query = " DELETE FROM packages WHERE(id ='".$id."') ";
		$query_run = mysqli_query($this->plug, $query);
		if(!$query_run){
			echo "Fail to run delete query";
		}else{
			$back = $_SERVER['HTTP_REFERER'];
			header('Location: '.$back);
		}
	}
}
?>