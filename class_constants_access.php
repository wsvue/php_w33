<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		/*Class constants ar useful whenever yo need to define a fixed vale, or set a configuration option,
that's specific to the class in question. For example, for the  'Car' class you could define class constants to represent various types of cars, then use these constants when creating 'Car' objects: */


	//create class 'Car'
	class Car{
		//creat 'constants class'
		const HATCHBACK = 1;
		const STATION_WAGON =2;
		const SUV =3;

		//creat 'properties'
		public $model;
		public $color;
		public $type;
		public $manufacturer;
	}
		//create 'Objects'
		$myCar = new Car;
		$myCar->model = "Dodge Calliber";
		$myCar->color = "Green";
		$myCar->manufacturer ="Chrysler";
		$myCar->type =  Car::HATCHBACK;

		echo "This $myCar->model is a ";
		switch ($myCar->type) {
			case $myCar::HATCHBACK:
				echo "hatchback";
				break;
			case Car::STATION_WAGON;
				echo "station wagon";
				break;
			case Car:: SUV:
				echo "SUV";
				break;
		}

	?>
</body>
</html>