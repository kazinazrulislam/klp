<?php 

	unset($_COOKIE['id']); 
    setcookie('id', null, -1, '/'); 
    header("location: index.php");




?>