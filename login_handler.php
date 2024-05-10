<?php
//LOGIN FORM HANDLING
if (isset($_POST["login"])) { //if login button is clicked
	$username = "";
	$password = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") { //if form uses a post method 
		$username = sanitizaData($_POST['username']);
		$password = sanitizaData($_POST['password']);

		//Execute sql command to first check if user exist in database
		$sql = "SELECT * FROM users WHERE username ='" . $username . "' && password = '" . $password . "';";
		/*
* here, i used the $result->num_rows method to check if the above database query
* has some info available. it returns 0 if there are no record. so i check
* if the result is greater 0 that means we have a record in the database.
*/
		$result = mysqli_query($connection, $sql);

		if ($result->num_rows > 0) {
			echo "<b>Logged in</b>";
		} else {
			echo "<b>Username or Password is invalid</b><br>";
		}
	}
}