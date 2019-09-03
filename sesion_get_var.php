<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Session Variable Values</title>
</head>
<body>
	
	<?php
		//Echo session variablse that were set on previous page
	echo "Favorite color is: " .$_SESSION["favcolor"] ."<br>";
	echo "Favorite animal is: " .$_SESSION["favanimal"] . ".";
	?>

	<h2>Run print_r() function.</h2>
	<?php
		print_r($_SESSION);
		
		echo "<br>";
		print_r($_SESSION["favcolor"]);
		echo "<br>";
		echo $_SESSION["favanimal"];
		echo "<br>";
	?>

	
</body>
</html>