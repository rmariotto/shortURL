<?php

$server = "localhost";
$user = "user";
$password = "jkdasjkdas";
$database = "url";

$connectDB = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno($connectDB )) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( !isset($_POST['user'], $_POST['password']) ) {
	exit('Please fill both fields!');
}