<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$bd = "pokemons-apaza-moises";

	$conn = new mysqli($host, $user, $password, $bd);

	if ($conn->connect_error) {
		die("fallo la coneccion ".$conn->connect_error);
	}

 ?>