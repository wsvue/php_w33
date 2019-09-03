<?php
	//Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// Set session variables
	$_SESSION["favcolor"] = "Green";
	$_SESSION["favanimal"] = "Cat";

	echo "Session variables are set";
	?>
</body>
</html>