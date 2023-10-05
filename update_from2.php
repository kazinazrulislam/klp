<?php
include 'database.php';
$id_konta = $_GET['id'];

// Create connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

  $sql = "SELECT * FROM table2 WHERE id='$id_konta'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row_er_songkha = $result->num_rows;

    while($row = $result->fetch_assoc()) { 

      
      $a = $row['email'];
      $b = $row['password'];

    }

  }

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="read2.php" method="post">

<p>email:</p><input type="text" name="email" value="<?php echo $a;?>">

<p>password</p><input type="text" name="password"value="<?php echo $b;?>">

<input type="hidden" name="id" value="<?php echo $id_konta; ?>">

<input type="submit" value="Update2">
</form>
</body>
</html>