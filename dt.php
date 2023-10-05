<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image";

  
  $conn = new mysqli($servername, $username, $password, $dbname);
  


  if ($conn->connect_error) {
    die($conn->connect_error);
  }?>