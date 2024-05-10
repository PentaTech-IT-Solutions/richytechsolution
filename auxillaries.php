<?php
//function to secure and prevent malicious attacks through input data
function sanitizaData($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}





