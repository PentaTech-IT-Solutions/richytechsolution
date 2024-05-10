<?php

//Getting basic info to connect to a local database provided by XAMPP
$host = "localhost";
$username = "root";
$password = "";
$database = "penta_tech";

//Connect to database
$connection = new mysqli($host, $username, $password, $database);

if (!$connection) {
	die("Error in connection, info: " . mysqli_connect_error());
}