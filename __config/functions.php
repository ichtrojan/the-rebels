<?php
// include custom build in functions
function sanitizeData($data)
{
	$data = strip_tags($data);
	$data = trim($data);
	
	return $data;
}

?>