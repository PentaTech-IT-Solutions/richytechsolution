<?php


//REGISTER FORM HANDLING
if (isset($_POST["Register"])) { //if register button is clicked
	$fullname = "";
	$username = "";
	$email = "";
	$password = "";
	$phone_number = "";
	$password_1 = "";
	$password_2 = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") { //if form uses a post method 
		//first of all we are getting form data
		/* we use the sanitizeData method to strip all cross-site scripting and hack codes 
		* from getting into our server.*/
		$username = sanitizaData($_POST['full_name']);
		$password = sanitizaData($_POST['username']);
		$username = sanitizaData($_POST['email']);
		$password = sanitizaData($_POST['phone_number']);
		$username = sanitizaData($_POST['password_1']);
		$password = sanitizaData($_POST['password_2']);
		if($password_1 !== $password_2){
			die("Password does not match!!!!");
		}
		$hash_password = password_hash($password_1,PASSWORD_DEFAULT);

	}
}