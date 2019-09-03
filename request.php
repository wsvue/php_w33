<!--
	PHP $_REQUEST 

	is used to collect data after submittin an HTML form.

	The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit",
	 the form data is sent to the file specified in the actio attribute of the <from> tag. In this example, we point to this file itself for processin form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global varialbe $_REQUEST to collect the value of the input field:
-->
<!DOCTYPE html>
<html>
<head>
	<title>$_REQUEST</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name:<input type="text" name="name">
		<input type="submit">
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			//collect value of input field
			$name = htmlspecialchars($_REQUEST['name']);
			if (empty($name)) {
				echo "Nmae is empty";
			} else {
				echo $name;
			}
		}
	?>
</body>
</html>