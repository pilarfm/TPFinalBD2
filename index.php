<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logeo</title>
	<?php 
 include "estilos.php";
?>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
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
	<div class="container">
		<br>
		<h2 class="text-center">Iniciar sesion</h2>
		<div class="col-md-4"></div>
		<form  action="login.php" method="post" class="col-md-4">
			
		  <div class="form-group ">
				<label for="exampleInputEmail1">Usuario:</label>
				<input name="usuario" type="text" required="required" class="form-control" placeholder="Usuario">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Contrase&ntilde;a</label>
				<input name="password" type="password" required="required" class="form-control" placeholder="Password">
			</div>		
			<div class="row espacio" >
					<button type="submit" class="btn btn-success">Iniciar</button>
			</div>
				
		  </div>
		</form>
		<br>
		<div class="col-md-6"></div> 
		<a href="registrase.php"><button class="btn ">Registrarse</button> </a>
	</div>
	
</body>
</html>