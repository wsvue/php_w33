<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table, th, td{
			border: 1px solid black;
			color: blue;
			background: yellow;
		}

	</style>
</head>
<body>
	<h2>Using table in Array </h2>
		<table>
			
	<?php
		$books = array("Title" => "The Green of Wrath",
						"Author"=>"John Steinbeck",
						"Pubyear"=>"1990");
		
		foreach ($books as $key => $value) {
			echo "<tr><th>$key</th>";
			echo "<td>$value</td></tr>";

		}
	?>
		
		</table>
</body>
</html>