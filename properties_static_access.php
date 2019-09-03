
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//create class
		//Static members of a class are independent of  any particular object derived fro that class. To access a static property, you write the class name, 
		//followed by two colons(::), followed by the property name (preceded by a $ symbol):

		class myClass{
			static public $myProperty =123;
		}
		

		myClass:: $myProperty++;
		echo myClass::$myProperty;
	?>
</body>
</html>