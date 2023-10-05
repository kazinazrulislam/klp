<?php 


	$servername = "localhost";
	$username = "root";
	$db_password = "";
	$dbname = "crud";

	$a = $_POST['email'];
	$b = $_POST['password'];

	$conn = new mysqli($servername, $username, $db_password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	else{

		$sql = "SELECT * FROM table2 WHERE email='$a' AND password='$b'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

			header("location: index.php");
		}
		else{  // jodi 0 hoy
			// header("location: login_form.php");
			// echo "<script>alert('Vul korechen! Abar den.')</script>";
			header("location: wrong_password.php");
		}



	}



?>