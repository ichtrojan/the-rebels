<?php
// include the database connection
require ("database.php");


/**
* Upload Packages
*/
class UploadPackages extends DBconnect
{
	protected $plug;
	protected $packages;
	
	function __construct($packages)
	{
		# code...
		$this->packages = $packages;
		$this->plug = parrent::__construct();
	}
}
?>