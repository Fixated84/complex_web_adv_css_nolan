<?php
$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "mailinglist";

// Create connection
 
 $con = mysqli_connect($host,$db_username,$db_password,$db_name) or die("Connection failed");

  print("You have connected to the database: " . $db_name);
 

 
//$servername = "localhost";
//$username = "root";
//$password = "";

// Create connection
//$conn = new mysqli($servername, $username, $password);

// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";
 

?>