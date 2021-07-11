<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logeo</title>
	<?php 
 include "estilos.php";
?>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
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
	
	if(isset($_GET["op"])){
		if($_GET["op"]=="PROHIBIDO"){
			?>
		<div class="alert alert-danger" role="alert">
			<h4>No tenes permisos</h4>
		</div>
		<?php
		} elseif ( $_GET[ "op" ] == "SALIR" ) {
				?>
		<div class="alert alert-danger" role="alert">
			<h4>Saliste de sesion</h4>
		</div>
		<?php
	
		} elseif ( $_GET[ "op" ] == "REGISTRADO" ) {
				?>
		<div class="alert alert-primary" role="alert">
			<h4>Ya puede iniciar sesion</h4>
		
		</div>
		<?php
	
		} else{
			?>
		<div class="alert alert-danger" role="alert">
			<h4>Error</h4>
		
		</div>
		<?php
	
		}
		}
		?>
	<div class="row top-padding-100">
		<div class="col-md-4"></div>
		<div class="col-md-4 white-back">
			<br>
			<h2 class="text-center">Iniciar sesion</h2>
			<form  action="login.php" method="post">
				
			<div class="form-group ">
					<label for="exampleInputEmail1"><b>Usuario:</b></label>
					<input name="usuario" type="text" required="required" class="form-control" placeholder="Usuario">
			</div><br>
			<div class="form-group">
					<label for="exampleInputPassword1"><b>Contrase&ntilde;a</b></label>
					<input name="password" type="password" required="required" class="form-control" placeholder="Password">
			</div><br><br>
			<div class="row">
				<div class="d-grid gap-2 mx-auto">
					<button type="submit" class="btn btn-success btn-md">Iniciar</button>
					<a class="btn btn-primary btn-md" href="registrase.php" role="button">Registrarse</a>
				</div>
			</div>
					
			</form>
			
		</div>
	</div>
	
</body>
</html>