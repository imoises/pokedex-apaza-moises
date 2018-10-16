<?php 

  session_start();
  require('config.php');
  if (!isset($_SESSION['usuario'])) {
    header('location: login.php');
  }

  if (isset($_GET['pokemon'])) {
  	$pokemon = $_GET['pokemon'];
  	$sql = "select * from pokemon where nombre='$pokemon';";
  	$result = $conn->query($sql);
  	while ($rows = $result->fetch_assoc()) {
  		$imagen = $rows['imagen'];
  		$nombre = $rows['nombre'];
  		$tipo = $rows['tipo'];
  	}
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

  <title>Modificar</title>
</head>
<body>
  <div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-outo text-center">
       <h1>MODIFICAR POKEDEX</h1> 
    </div>

    <div class="container">
    	<form action="modificar.php" method="POST" class="container">
    		<div class="form-group">
    			<label for="formGroupExampleInput">Nombre</label>
    			<input type="text" name="nombre" class="form-control" id="formGroupExampleInput" value="<?php echo($nombre); ?>">
    		</div>
    		<div class="form-group">
    			<label for="formGroupExampleInput2">Tipo</label>
    			<input type="text" name="tipo" class="form-control" id="formGroupExampleInput2" value="<?php echo($tipo); ?>">
    		</div>
    		<div class="form-group">
    			<label for="formGroupExampleInput2">Imagen</label>
    			<input type="text" name="img" class="form-control" id="formGroupExampleInput2" value="<?php echo($imagen); ?>">
    		</div>
    		<input type="submit" class="btn btn-primary" name="btnGuardar" value="Guardar">
    		<a href="index.php" class="btn btn-outline-dark">Regresar</a>
    	</form>

    </div>



    <?php 
  		if (isset($_POST['btnGuardar'])) {

  		  	$nombre = $_POST['nombre'];
  		  	$tipo = $_POST['tipo'];
  		  	$imagen = $_POST['img'];


  		  	$sql = "UPDATE pokemon set tipo='$tipo', imagen='$imagen' where nombre='$nombre';";
          if ($nombre!="") {
    		  	$conn->query($sql);
    		  	echo "<script> alert('Se Modifico!');</script>";
            header("location: index.php");
          }
  	  	}

  	 	if (isset($_POST["btnRegresar"])) {
  	  		header("location:index.php");
    		}

    	$conn->close();
    ?>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>