<!DOCTYPE html>
<?php
	include("dbConnection.php");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2 mt-5">
			<di>
				<h1>REGISTRO DE USUARIOS <br></h1>
			</di>
			<div>
				<form action="index.php" method="POST">
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre y apellido">
					</div>
					<div class="form-group">
						<label>Teléfono:</label>
						<input type="text" name="telefono" class="form-control" placeholder="Ingresa tu número de teléfono">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="email" class="form-control" placeholder="Ingresa tu correo electrónico">
					</div>
					<div class="form-group">
						<input type="submit" name="insertar" class="mt-4 btn btn-warning">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
		include("createUser.php");
	?>
</body>
</html>