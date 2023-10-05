<?php

include 'database.php';

$id_konta = $_POST['id'];

$a = $_POST['email'];
$b = $_POST['password'];



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

  $sql = "UPDATE table2 SET email='$a',password='$b' WHERE id='$id_konta'";

  if ($conn->query($sql) === TRUE) {
    // header("location:read.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
 if ($conn->query($sql) === TRUE) {
    header("location:read2.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



$conn->close();
?>