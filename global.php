
<!--
	PHP $GLOBALS

	$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script(also from within functions or methods).

	PHP stores all global variables inan array called $GLOBALS[index]. The index holds the name of the variable.

 -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>The Superglobals : $GLOBALS</title>
 </head>
 <body>
 	<?php
 		$x = 75;
 		$y = 25;

 		//create function
 		function addition(){
 			//code
 			$GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y']; 
 		}
 		//call 'addition()' function to display
 		addition();
 		echo $z;
 		
 		// In the example, since 'z ' is a variable present within the $GLOBALS array, it is  also accessible from outside the function !
 	?>
 </body>
 </html>