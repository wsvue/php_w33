<!DOCTYPE html>
<html>
<head>
	<title>Using print_r()function to output an entire Array.</title>
</head>
<body>
	<?php
		//Using print_r() function to output and entire Array.
		/*  
			Arrays can get quite complex, as yo see later in the chapter, so often you'll find that you want to inspect
			an array to see what it contains. You can't just print an array with print() ro echo(), like yo ucan with regular variables,
			because these functions can work with only one value at a time. However, PHP does give you a funtion called print_r()
			that you can use to output the contents of an array for debugging.	
			Using print_r() is easy -just pass it the array you want ot output:

			print_r($array);
		*/
		$authors = array("Steinbeck","Kafka", "Tolkien","Dickens"); 

		$mybooks = array("title"=>"The Grapes of Wrath",
						"author"=>"John Steinbeck",
						"pubyear"=>"1995",
					);
		echo '<h2>$authors</h2><pre>';
		print_r($authors);
		//echo "<br>";

		echo '</pre><h2>$mybooks</h2><pre>';
		print_r($mybooks);
		//echo "</pre>";

	?>
</body>
</html>
