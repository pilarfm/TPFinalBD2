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
</body>
</html>
