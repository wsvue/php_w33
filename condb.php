<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thailand";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// set the deault cilent character set:
mysqli_set_charset($conn, "utf8");



$sql = "SELECT PROVINCE_ID, PROVINCE_NAME,  GEO_ID FROM province";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["PROVINCE_ID"]. " - ชื่อ: " . $row["PROVINCE_NAME"]. " -ภาค "  .$row["GEO_ID"]. "<br>"; 
    }
} else {
    echo "0 results";  
}
$conn->close();
?>
</body>
</html>