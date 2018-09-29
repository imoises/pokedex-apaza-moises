<?php 
	
	$host = "localhost";
	$usuario = "root";
	$password = "";
	$bd = "pokemons";

	$conn = new mysqli($host, $usuario, $password, $bd);

	error_reporting(0);

	if ($conn->connect_error) {
		echo "Fallo la coneccion.";
		exit();
	}

 ?>


<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>buscar</title>
</head>
<body>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-outo text-center">
     <h1>Agregar a la pokedex</h1> 
  </div>

  <div class="container">
  	<form action="agregar.php" method="POST" class="container">
  		<div class="form-group">
  			<label for="formGroupExampleInput">Nombre</label>
  			<input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Pikachu">
  		</div>
  		<div class="form-group">
  			<label for="formGroupExampleInput2">Tipo</label>
  			<input type="text" name="tipo" class="form-control" id="formGroupExampleInput2" placeholder="Link de imaen PNG">
  		</div>
  		<div class="form-group">
  			<label for="formGroupExampleInput2">Imagen</label>
  			<input type="text" name="img" class="form-control" id="formGroupExampleInput2" placeholder="Link de imagen PNG">
  		</div>
  		<div class="form-group">
  			<label for="formGroupExampleInput2">Genero</label>
  			<input type="text" name="genero" class="form-control" id="formGroupExampleInput2" placeholder="Link de imagen PNG">
  		</div>
  		<input type="submit" class="btn btn-primary" name="btnAgregar" value="Agregar">
  		<a href="index.php" class="btn btn-outline-dark">Regresar</a>
  	</form>

  </div>



  <?php 
		if (isset($_POST['btnAgregar'])) {

		  	$nombre = $_POST['nombre'];
		  	$tipo = $_POST['tipo'];
		  	$imagen = $_POST['img'];
		  	$genero = $_POST['genero'];


		  	$sql = "INSERT INTO pokemon (nombre, tipo, genero, imagen) values ('$nombre','$tipo','$genero','$imagen');";
        if ($nombre!="") {
  		  	$conn->query($sql);
  		  	echo "<script> alert('Se agrego son exito!');</script>";   
        }
	  	}

	 	if (isset($_POST["btnRegresar"])) {
	  		header("location:index.php");
  		}

  		$conn->close();
  ?>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

