<?php
include 'database.php';

$id_konta = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	$sql = "DELETE FROM table2 WHERE id='$id_konta'";
  	$result = $conn->query($sql);

  	if ($conn->query($sql) === TRUE) {
	  header("location:read2.php");
	} else {
	  echo "Error deleting record: " . $conn->error;
	}
}


 ?>