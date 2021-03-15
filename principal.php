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
		<div class="col-md-2">
			<br><br><br><br><br>
			<button class="btn btn-success btn-block" id="insert" onclick="tipoConsulta(id)">Insert</button>
			<br> <br>
			<button class="btn btn-warning btn-block" id="select" onclick="tipoConsulta(id)">Select</button>
			<br> <br>
			<button class="btn btn-primary btn-block" id="update" onclick="tipoConsulta(id)">Update</button>
			<br> <br>
			<button class="btn btn-danger btn-block" id="delete" onclick="tipoConsulta(id)">Delete</button>

		</div>	
		<div class="col-md-5">
			<h4 class="text-center">Escriba aqui su consulta</h4>
			<form action="consulta.php" method="post">
				<textarea name="text-area-entrada" id="text-area-entrada" rows="20"  style="min-width: 100%"></textarea>
				<button type="submit" class="btn btn-success" >Consultar</button>
			</form>
			
		</div>

		<div class="col-md-5">
			<h4 class="text-center">Resultado de su consulta</h4>
			<textarea name="text-area-salida" id="text-area-salida" rows="20"  style="min-width: 100%"></textarea>
		</div>
	</div>
</div>
<?php
	if (isset($_GET["fallo"]) && ($_GET["fallo"]) == 'insert')
		$tipoConsulta = "insert";
	else
		if (isset($_GET["fallo"]) && ($_GET["fallo"]) == 'update')
			$tipoConsulta = "update";
		else 
			if (isset($_GET["fallo"]) && ($_GET["fallo"]) == 'select')
				$tipoConsulta = "select";
			else 
				if (isset($_GET["fallo"]) && ($_GET["fallo"]) == 'delete')
					$tipoConsulta = "delete";
				else
					$tipoConsulta = "error";

	echo '<script type="text/javascript">',
			'respuesta('.$tipoConsulta.');',
		' function respuesta(resp){
			document.getElementById("text-area-salida").innerHTML = "Funciono ";
		}'
		, '</script>'
	 ;
?>

<script>
	function tipoConsulta(id){
		document.getElementById("text-area-entrada").innerHTML = " "+ id + " ";
	}

</script>

</body>



</html>
