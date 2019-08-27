<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$server = "localhost";
		$user = "root";
		$password = "";
		$db = "tac_db";

		
		//create connection
		$conn = mysqli_connect($server, $user, $password, $db);

		//check connection
		if(!$conn){
			die ("Connection failed:" .mysqli_connect_error()) ;
		}
		echo "Connected successfully";

	?>
</body>
</html>