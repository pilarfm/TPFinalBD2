<?php 
 include "protec.php";
include "conexion.php";
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Menu Principal</title>
	<?php 
 include "estilos.php";
?>
</head>

<body>
	<?php
	if(isset($_GET["op"])){
	if($_GET["op"]=="PROHIBIDO"){
		?>
	<div class="alert alert-danger" role="alert">
		<h4>No tenes permisos</h4>
	</div>
	<?php }}
 include "navegador.php";
?>
<div class="container">
	
	<div class="row">
		<h1 class="text-center">Menu Principal</h1>
		<br>
		<h2 class="text-center">Bienvenido, <?php echo $_SESSION['usuario']; ?> </h2>
	</div>
	<br><br>
	<div class="row">	
		<div class="col-md-6">
			<h4 class="text-center">Escriba aqui su consulta</h4>
			<textarea rows="20"  style="min-width: 100%"></textarea>
			<button type="submit" class="btn btn-success">Consultar</button>
		</div>

		<div class="col-md-6">
			<h4 class="text-center">Resultado de su consulta</h4>
			<textarea  rows="20"  style="min-width: 100%"></textarea>
		</div>
	</div>
</div>
</body>
</html>
