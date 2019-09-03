<!-- 
	Sort Array (Ascending Order), Acccording to Value - asort()
-->

<!DOCTYPE html>
<html>
<head>
	<title>Sort Array by asort() function.</title>
</head>
<body>
	<?php
		$nameAge = array("Peter"=>"25", "John"=>"32","Nina"=>"28", "Smith"=>"44", "Mana"=>"26");

		asort($nameAge);

		//create comparison using 'foreach' loop
		foreach ($nameAge as $key => $value) {
			echo "Name:" .$key . ", age:" .$value;
			echo "<br>";
		}
	?>
</body>
</html>