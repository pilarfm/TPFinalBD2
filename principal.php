<?php 
include "protec.php";
include "conexion.php";
?>
<!doctype html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src ="script.js"></script>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Menu Principal</title>
	<?php 
 include "estilos.php";
?>
</head>

<body class="background-claro">

<div class="row header">
		<div class="col-md-4">
			<img src="img/logo.png" width="300">
		</div>
		<div class="col-md-5"></div>
		<div class="col-md-2 autores"> Diseñado y desarrollado por: <b><i>Facundo Perez, Matias Dieguez, Juan Cruz Sanchez Saiag y Pilar Fernandez Mutti </i></b></div>
</div>
<div class="row">
	
	<div class="col-md-10"></div>
	<div class="col-md-2">
		<br>
		<input type="button" name="enviar"  class="btn btn-dark" value="Ver Historial" href="javascript:;" onclick="mostrarRegistar('dado');">
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
	</div>
</div>

<div class="container">
	
	<div class="row menu-principal">
		<h1 class="text-center">Menu Principal</h1>
		<h2 class="text-center">Bienvenido, <?php echo $_SESSION['usuario']; ?> </h2>
	</div>
	<br>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<h3 class="text-center">Escriba aqui su consulta</h3>
				
				<form action= "consulta.php" method="post">
					<div id="ejemplo" style="background-color: aqua; border-radius: 20px;"> </div>
					
				</form>
				<?php //<input type="text-area" id="nombre" style="height: 300px; width: 300px"> <br> 
				?>
				<textarea type="text-area" id="nombre" cols="89" rows="10" style="overflow:hidden;"></textarea>
			</div>
			<div class="row">
				<button class="btn btn-danger btn-block col-3" id="limpiar" onclick="tipoConsulta(id)">Limpiar Consulta</button>
				<input type="button" class="btn btn-dark btn-padding col-3" name="enviar" value="Enviar" href="javascript:;" onclick="Hola($('#nombre').val());">
			</div>
			<br>
			<div class="row botones">
				<div class="btn-group d-flex">
					<button class="btn btn-success boton" id="create" onclick="tipoConsulta(id)">Create</button>
					<button class="btn btn-primary boton" id="insert" onclick="tipoConsulta(id)">Insert</button>
					<button class="btn btn-success boton" id="get" onclick="tipoConsulta(id)">Select</button>
					<button class="btn btn-primary boton" id="update" onclick="tipoConsulta(id)">Update</button>
					<button class="btn btn-danger boton ultimo" id="delete" onclick="tipoConsulta(id)">Delete</button>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="row text-center">
				<h3>Respuesta</h3>
			</div>
			<div class="row" id="resultado">
			</div>
		</div>

	</div>
	<br><br><br>
	
	<div class="row">
		<div class="col-md-5" id="historial" style="width: 100%">
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

//	echo '<script type="text/javascript">',
//			'respuesta('.$tipoConsulta.');',
//		' function respuesta(resp){
//			document.getElementById("text-area-salida").innerHTML = "Funciono ";
//		}'
//		, '</script>'
//	 ;
?>

<script>
	function tipoConsulta(id){
		if (id=="create"){
			document.getElementById("nombre").innerHTML = 
			'CREATE TABLE IF NOT EXISTS jugadores ('+
			'id_jugador int(5) AUTO_INCREMENT,\n'+
			'nombre varchar(30),\n'+
			'apellido varchar(30),\n'+
			'deporte varchar(30),\n'+
			'numero int,\n'+
			'PRIMARY KEY (id_jugador))';
		}
		else if (id=="insert"){
			document.getElementById("nombre").innerHTML = 'INSERT INTO jugadores (Nombre, Apellido, Deporte, Numero) VALUES ("Leonel", "Messi", "Futbol", 10)';
		}
		else if (id=="get"){
			document.getElementById("nombre").innerHTML = 'SELECT * FROM jugadores';
		}
		else if (id=="update"){
			document.getElementById("nombre").innerHTML = 'UPDATE jugadores SET nombre = [value], apellido = [value], deporte = [value], numero = [value] WHERE 0';
		}
		else if (id=="delete"){
			document.getElementById("nombre").innerHTML = 'DELETE FROM jugadores WHERE 0';
		}
		else if (id=="limpiar"){
			document.getElementById("nombre").innerHTML = '';
		}
	}


	function agregarCampo(){
		
		document.getElementById("text-area-entrada").innerHTML += ',  "clave" : "valor" ';
	}

	function borrarConsulta(){
		document.getElementById("text-area-entrada").innerHTML = " ";
	}

</script>
</body>



</html>
