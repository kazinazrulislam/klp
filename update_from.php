<?php
include 'database.php';
$id_konta = $_GET['id'];

// Create connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

  $sql = "SELECT * FROM user WHERE id='$id_konta'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row_er_songkha = $result->num_rows;

    while($row = $result->fetch_assoc()) { 

      
      $etar_email = $row['email'];
      $etar_password = $row['password'];

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
<form action="update.php" method="post">

<p>email:</p><input type="text" name="email" value="<?php echo $etar_email;?>">

<p>password</p><input type="text" name="password"value="<?php echo $etar_password;?>">

<input type="hidden" name="id" value="<?php echo $id_konta; ?>">

<input type="submit" value="Update">
</form>
</body>
</html>