<?php 
	
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$bd = "pokemons";

	$conn = new mysqli($host, $user, $password, $bd);
	error_reporting(0);
	if ($conn->connect_error) {
		die("fallo la coneccion ".$conn->connect_error);
	}

	if (isset($_GET['borraPokemon'])) {
        $aborrar = $_GET['borraPokemon'];
        $sql = "delete from pokemon where nombre='$aborrar';";
        $result = $conn->query($sql);
        if ($result>0) {
          echo "<script>alert('Registro Borrado');</script>";
          //header("location: index.php");
        }
	}else{
		echo "No se selecciono el pokemon para borrar <br><br>";
		echo "<h1><a href='index.php'>Ir al home POKEDEX</a></h1>";
	}

	echo "<a href='index.php'>Regresar</a>";
     $conn->close();
?>
