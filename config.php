<?php

	$servername = "localhost";
	$username = "id20424100_root";
	$password = "F%DE=HPuYrZFZ?4z";
	$dbname = "id20424100_banksysphp";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>