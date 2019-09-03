<!--
	Sort Array in Descending Order - rsort()

	z-a.
-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$cars = array("BMW", "TOYOTA", "LAMBUKINI", "HONDA", "NISSAN","MASSDA","FORD");


		rsort($cars);

		//create variable for counting $cars
		$ccars = count($cars);

		//create condition using 'for' to loop of $cars
		for($x=0; $x<$ccars; $x++){

			echo "$x"." .$cars[$x]";
			echo "<br>";
		}

	?>
</body>
</html>