<?php

include 'database.php';


$a = $_POST['email'];
$b = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


if ($conn->connect_error)

 {  die("Connection failed: " . $conn->connect_error); }


else{   $sql = "INSERT INTO user (email, password) VALUES ('$a','$b')"; }



if ($conn->query($sql) === TRUE) 
	
   {header("location:read.php");}


else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();
?>