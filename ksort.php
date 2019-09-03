<!-- 
	Sort Array (Ascending Order), Acccording to Key - ksort()
-->

<!DOCTYPE html>
<html>
<head>
	<title>Sort Array by asort() function.</title>
	<style>
		table, th, td {
			border: 1px solid black;
			background-color: #aaeae6;
			width: 35%;
			text-align: center;
			border-collapse: collapse;
		}
		th {
			background-color: pink;
		}
		#myH {
			background-color: #a6acaf;
		}
	</style>
</head>
<body>
	
	<table>	
		<tr>
			<th colspan="2"><h2>Table of Number</h2></th>

			<tr>
			<td id="myH"><h4>Name</h4></td>
			<td id="myH"><h4>Age</h4></td>
			</tr>
		</tr>	
	<?php
		$nameAge = array("Peter"=>"25", "John"=>"32","Nina"=>"28", "Smith"=>"44", "Mana"=>"26", "อนุชิต"=>"41", "ศศิกานต์"=>"25","กฤษณะ"=>"39");

		ksort($nameAge);

		//create comparison using 'foreach' loop
		foreach ($nameAge as $key => $value) {
			echo "<tr>
					<td>$key</td>
					<td>$value</td> 
				</tr> ";
			echo "<br>";
		}
	?>
	</table>
</body>
</html>