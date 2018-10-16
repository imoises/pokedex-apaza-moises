<?php 
	
	session_start();
	require('config.php');

	if (isset($_SESSION['usuario'])) {
		if (isset($_GET['borraPokemon'])) {
	        $aborrar = $_GET['borraPokemon'];
	        $sql = "delete from pokemon where nombre='$aborrar';";
	        $result = $conn->query($sql);
	        if ($result>0) {
	          header("location: index.php");
	        }
		}
	}
	header('location: login.php');
	$conn->close();
?>
