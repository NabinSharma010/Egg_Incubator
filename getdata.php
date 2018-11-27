<?php
date_default_timezone_set("Asia/Bangkok");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

if(!empty($_POST['humid']) && !empty($_POST['temp']))
    {
    	$humid = $_POST['humid'];
    	$temp = $_POST['temp'];
    	$date =  date("Y-m-d h:i:sa");
	    $sql = "INSERT INTO arduino (Humidity,Temperature,Date) VALUES ('".$humid."', '".$temp."','".$date."')";
		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

$conn->close();
?>