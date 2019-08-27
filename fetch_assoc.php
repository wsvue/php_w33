<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
		<?php
$con=mysqli_connect("localhost","root","","thailand");

mysqli_set_charset($con, "utf8");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT PROVINCE_ID, PROVINCE_NAME, GEO_ID FROM province"; 
	
	if ($result =mysqli_query($con, $sql)) {
		while ($row=mysqli_fetch_assoc($result)) {
			printf("%s %s (%s) \n", $row["PROVINCE_ID"], $row["PROVINCE_NAME"], $row["GEO_ID"]); 

			//print $row["PROVINCE_NAME"] ;
			print("<br>");
		}
		
	}
// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>

</body>
</html>