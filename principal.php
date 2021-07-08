<?php 
include "protec.php";
include "conexion.php";
?>
<!doctype html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src ="script.js"></script>
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
		<h2 class="text-center">Bienvenido, <?php echo $_SESSION['usuario']; ?> </h2>
	</div>
	<br>
	<div class="row">
		<div class="col-md-2">
			<br><br><br>
			<button class="btn btn-success btn-block" id="create" onclick="tipoConsulta(id)">Crear Tabla</button>
			
			<button class="btn btn-success btn-xs" id="create-document-example" onclick="verEjemplo(id)"> Ver ejemplo </button>
			<br> <br>
			<button class="btn btn-warning btn-block" id="get" onclick="tipoConsulta(id)">General SELECT</button>
			
			<button class="btn btn-warning btn-xs" id="get-document-example" onclick="verEjemplo(id)" > Ver ejemplo </button>
			<br> <br>
			<button class="btn btn-primary btn-block" id="update" onclick="tipoConsulta(id)">Update</button>
			
			<button class="btn btn-primary btn-xs" id="update-example" onclick="verEjemplo(id)" > Ver ejemplo </button>
			<br> <br>
			<button class="btn btn-danger btn-block" id="delete" onclick="tipoConsulta(id)">Delete</button>
			
			<button class="btn btn-danger btn-xs" id="delete-example" onclick="verEjemplo(id)" > Ver ejemplo </button>
			<br>
			<br>
			<input type="button" name="enviar" value="Enviar" href="javascript:;" onclick="mostrarRegistar('dado');">

		</div>	
		<div class="col-md-5">
			<h3 class="text-center">Escriba aqui su consulta</h3>
			


			
			<form action= "consulta.php" method="post">
				<div id="ejemplo" style="background-color: aqua; border-radius: 20px;"> </div>

				
			</form>
			<?php //<input type="text-area" id="nombre" style="height: 300px; width: 300px"> <br> 
			?>
			<textarea type="text-area" id="nombre" cols="50" rows="5" style="overflow:hidden;"></textarea>
			<br>
			<input type="button" name="enviar" value="Enviar" href="javascript:;" onclick="Hola($('#nombre').val());">
			
			
		</div>

		<div class="col-md-5" id="resultado">

		</div>
	</div>
	<div class="col-md-5" id="historial" style="width: 100%">
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
			document.getElementById("text-area-entrada").innerHTML = '{  "clave" : "valor" ';
		}
		else if (id=="get"){
			document.getElementById("text-area-entrada").innerHTML = '{  "id" : "valor" ';
		}
		else if (id=="update"){
			document.getElementById("text-area-entrada").innerHTML = '{  "id" : "valor" , "_rev" : "valor"';
		}
		else if (id=="delete"){
			document.getElementById("text-area-entrada").innerHTML = '{  "id" : "valor" , "_rev" : "valor"';
		}
			
		
	}

	
	function verEjemplo(id){
		if (id =="create-document-example"){
			document.getElementById("ejemplo").innerHTML = "<br> &nbsp&nbsp <b>Ejemplo:</b> <br>" + 
    ' &nbsp CREATE TABLE IF NOT EXISTS jugadores ( <br>'+
	' &nbsp id_jugador int(5) AUTO_INCREMENT, <br>'+
	' &nbsp nombre varchar(30), <br>'+
	' &nbsp apellido varchar(30), <br>'+
	' &nbsp deporte varchar(30), <br>'+
	' &nbsp numero int, <br>'+
	' &nbsp PRIMARY KEY (id_jugador)) <br> <br>'  
		}
		else if(id =="get-document-example"){
			document.getElementById("ejemplo").innerHTML = "<br> &nbsp&nbsp <b>Ejemplo:</b> <br>" + 
    ' &nbsp SELECT * from jugadores <br><br>'
		}
		else if(id =="update-example"){
			document.getElementById("ejemplo").innerHTML = "<br> &nbsp&nbsp <b>Ejemplo:</b> <br>" + 
    ' &nbsp { "nombre": "Juan95", <br>'+
    ' &nbsp   "pass": "5678",<br>'+
    ' &nbsp    "id" : " ", <br>'+
	' &nbsp    "_rev": " " } <br>'  +
	' &nbsp <b> Se actualiza nombre de usuario y contraseña. <br>&nbsp&nbsp En este tipo de consulta es obligatorio ingresar un id y rev. </b><br><br>' 
		}
		else if (id =="delete-example"){
			document.getElementById("ejemplo").innerHTML = "<br> &nbsp&nbsp <b>Ejemplo:</b> <br>" +' &nbsp {  "id" : " ", <br>'+
		'&nbsp&nbsp "_rev": " " } <br> &nbsp&nbsp <b> En este tipo de consulta es obligatorio ingresar un id y rev. </b> <br><br>';
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
