<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php

		//to loop through and print all the values of an indexed array, you could use a 'for' loop, like this:
		$cars = array("Volvo","Toyota","Nissan", "Honda");
		$arrlength = count($cars);

		for($i =0; $i<$arrlength; $i++){
			echo $cars[$i];
			echo "<br>";

		}
	?>
</body>
</html>

