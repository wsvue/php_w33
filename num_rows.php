<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
		//create connect database
		$conn =mysqli_connect("localhost","root","", "thailand");

		//check connection
		if(mysqli_connect_errno())
		{
			echo "Failed to connected." .mysqli_connect_errno();
		}

		$sql ="select PROVINCE_ID, PROVINCE_NAME from province";

		if($result=mysqli_query($conn, $sql)){
			//return the number of rows in result set
			$rowcout =mysqli_num_rows($result);
			printf("Result set has %d rows. \n" , $rowcout);

			//free resulat set
			mysqli_free_result($result);
		}
		mysqli_close($conn);
	?>
</body>
</html>