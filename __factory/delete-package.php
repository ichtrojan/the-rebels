<?php
# include the processor for processing files.
require "../__config/processor.php";
require "../__config/functions.php";

// get packages request
if($_GET['pid'])
{
	// assign package id
	$p_id = $_GET['pid'];
	if(!is_numeric($p_id))
	{
		$back = $_SERVER['HTTP_REFERER'];
		header('Location: '.$back);
	}else{
		$packages = new UploadPackages();
		$packages->delete($p_id);
	}
}

?>