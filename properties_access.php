<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//create 'class'
		class Car{
			public $color;
			public $manufacturer;
		}
		//create 'objects'
		//we can access 'properties' by sign '->'
		$beetle = new Car;
		$beetle->color ='red';
		$beetle->manufacturer='Volkswagen';

		$mustang = new Car();
		$mustang->color ='green';
		$mustang->manufacturer ='Ford';

		echo "<h2>Some properties:</h2>";
		echo "<p>The Beetle's color is : " .$beetle->color .".</p>";

		echo "<p>The Mustang's manufacturer is :" .$mustang->manufacturer . "<p>";

		echo "<h2>The \$beetle Object:</h2><pre>";
		print_r($beetle);
		echo "</pre>";

		echo "<h2>The \$mustang Object:</h2><pre>";
		print_r($mustang);
		echo "</pre>";
	?>
</body>
</html>