<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrarse</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<?php 
	include "estilos.php";
?>
</head>

<body class="background">
	<div class="row header">
			<div class="col-md-4">
				<img src="img/logo.png" width="300">
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-2 autores"> Diseñado y desarrollado por: <b><i>Facundo Perez, Matias Dieguez, Juan Cruz Sanchez Saiag y Pilar Fernandez Mutti </i></b></div>
	</div>
	<?php
	if ( isset( $_GET[ "op" ] ) ) {
		if ( $_GET[ "op" ] == "EXISTE" ) {
			?>
	<div class="alert alert-danger" role="alert">
		<h4>Ese usario ya esta registrado!</h4>
	</div>
	<?php
	} elseif ( $_GET[ "op" ] == "EXISTE" ) {
			?>
	<div class="alert alert-danger" role="alert">
		<h4>Ese usario ya esta registrado!</h4>
	</div>
	<?php
	}  else {
		?>
	<div class="alert alert-danger" role="alert">
		<h4>Error </h4>
	</div>
	<?php
	}
	}
	?>


<div class="row top-padding-100">
		<div class="col-md-4"></div>
		<br>
		<div class="col-md-4 white-back">
		<h2 class="text-center">Registar Usuario</h2>
			<form class="col-md-12" action="registrando.php" method="post">
				<label class=""></label>
				<div class="form-group">
					<label><b>Usuario:</b></label>
					<input name="usuario" type="text" required="required" class="form-control"  >
				</div>
				<br>
				<div class="form-group">
					<label for="exampleInputPassword1"><b>Contrase&ntilde;a</b></label>
					<input name="password" type="password" required="required" class="form-control" id="exampleInputPassword1" placeholder="Password" >
				</div>
				<br>
				<div class="form-group">
					<label s><b>Apodo:</b></label>
					<input name="nick" type="text" required="required" class="form-control" >
				</div>
				<br>
				<div class="form-group">
					<label><b>Email:</b></label>
					<input name="email" type="text" required="required" class="form-control"  >
				</div>
				<br>
				<div class="row">
					<div class="d-grid gap-2 mx-auto">
						<button type="submit" class="btn btn-success">Guardar</button>
						<a class="btn btn-primary btn-md" href="index.php" role="button">Volver</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<script>
	



</script>
</body>
</html>