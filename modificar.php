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

  if (isset($_POST['btnAgregar'])) {
    header("location: agregar.php");
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
     <h1>MODIFICAR POKEDEX</h1> 
  </div>

  <div class="container">
    <form action="modificar.php" method="POST">
      <div class="input-group row">
        <div class="input-group col-sm-8"">
        	<a href="index.php" class="btn btn-outline-success">Regresar</a>
        </div>
      </div>
    </form>


    <div class="text-center"> _____________________ </div>


    <?php 
      
		$sql = "Select * from pokemon;";
		$result = $conn->query($sql);
		while ($rows = $result->fetch_assoc()) {
                echo "<div>_</div>
                  <div class='row justify-content-md-center'>
                    <div class='col col-lg-2 p-3 mb-2 bg-secondary text-white'>".
                      "<img src=".$rows['imagen']." width=150px height=150px>" .
                    "</div>
                    <div class='col-md-auto p-3 mb-2 bg-primary text-white'>".
                      $rows['nombre'].
                      "<br><img src=".$rows['tipo']." width=60px height=30px>".
                      "<br><img src=".$rows['genero']." width=30px height=30px>"."
                    </div>
                    <div class='col col-lg-1 p-2 mb-2 text-white'>".
                      "<br><a href='modificar.php?pokemon=".$rows['nombre']."'"." class='btn btn-danger btn-sm'>Modificar</a>".
                    "</div>
                  </div>";
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