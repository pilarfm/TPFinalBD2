<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<?php 
	include "estilos.php";
?>
</head>

<body class="fondoNaranja">
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
<div class="container fondoForm">
	<br>
		<h2 class="text-center">Registar Usuario</h2>
		<div class="col-md-4"></div>
		<form class="col-md-4" action="registrando.php" method="post">
			<label class=""></label>
			<div class="form-group">
				<label>Usuario:</label>
				<input name="usuario" type="text" required="required" class="form-control"  >
			</div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Contrase&ntilde;a</label>
			  <input name="password" type="password" required="required" class="form-control" id="exampleInputPassword1" placeholder="Password" >
			</div>
		  <div class="form-group">
			<label s>Apodo:</label>
			  <input name="nick" type="text" required="required" class="form-control" >
			</div>
		  <div class="form-group">
			<label>Email:</label>
			  <input name="email" type="text" required="required" class="form-control"  >
			</div>
			<div class="row">
			<button type="submit" class="btn btn-success espacio" >Guardar</button><a  style="color: white" href="index.php"><button type="button" class="btn btn-primary espacio">Volver</button></a>
			</div>
		</form>
	</div>

</body>
</html>