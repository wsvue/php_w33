<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
		//Loop Through an Associative Array
		//To loop through and print all the values of an associative array, you could use a "foreach" loop, like thia:
	
		$age = array("Peter"=>"30", "Ben"=>"34","Joe"=>"45");

		foreach ($age as $x => $x_value) {
			echo "Key=" .$x .", Value =" .$x_value;
			echo "<br>";

		}
	?>
</body>
</html>