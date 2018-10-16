<?php

	session_start();
	require('config.php');

	$email = !empty($_REQUEST['email'])?$_REQUEST['email']: "";
	$password = !empty($_REQUEST['password'])?$_REQUEST['password']: "";
	if ($email && $password) {
		$sql = "select * from usuario where email='$email' and password='$password';";
		$result = $conn->query($sql);

		if ($row = $result->fetch_assoc()) {
			$_SESSION['usuario'] = $row['email'];
			header("Location: agregar.php");
		}
	}
	header('Location: login.php');

	$conn->close();
 ?>
