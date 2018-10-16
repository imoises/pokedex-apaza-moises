<?php 
	session_start();
 	require('config.php');

	if (isset($_SESSION['usuario'])) {
		header("Location: agregar.php");
	}

 ?> 

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>login</title>
	<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css">
</head>
<body class="text-center">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col md-3">
				
				<form class="form-container" action="procesaLogin.php" method="POST" id="form">
					<h1 class="h3 mb-3 font-weight-normal">Login</h1>

					<div class="form-group">
						<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
					</div>

					<input type="submit" class="btn btn-primary" name="btnAceptar" id="btnAceptar" onclick="valida_envia()" value="Aceptar">
					<a href="index.php" class="btn btn-secondary">Regresar</a>
				</form>
			</div>
		</div>
	</div>
	<?php $conn->close(); ?>

	<script type="text/javascript" src="recursos/js/jquery-3.3.1.min"></script>
	<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>

</body>
</html>