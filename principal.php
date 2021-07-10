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
			<button class="btn btn-primary btn-block" id="insert" onclick="tipoConsulta(id)">Insert</button>
			
			<button class="btn btn-primary btn-xs" id="insert-example" onclick="verEjemplo(id)" > Ver ejemplo </button>
			
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
			<button class="btn btn-danger btn-block" id="limpiar" onclick="tipoConsulta(id)">Limpiar Consulta</button>
			
			<br><br>
			<input type="button" name="enviar" value="Ver Historial" href="javascript:;" onclick="mostrarRegistar('dado');">

			<br><br>
			<a href="exportarPDF.php" target="_blank">
    			<button>Exportar PDF</button>
			</a>

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
    ' &nbsp  UPDATE jugadores <br>'+
    ' &nbsp  SET nombre=[value],<br>'+
	' &nbsp	apellido=[value],<br>'+
	' &nbsp	deporte=[value],<br>'+
	' &nbsp	numero=[value]<br>'+
	' &nbsp	WHERE 0'
		}
		else if(id =="insert-example"){
			document.getElementById("ejemplo").innerHTML = "<br> &nbsp&nbsp <b>Ejemplo:</b> <br>" + 
    ' &nbsp INSERT INTO jugadores (Nombre, Apellido, Deporte, Numero)<br>'+
	' &nbsp VALUES ("Leonel", "Messi", "Futbol", 10)'
		}
		else if (id =="delete-example"){
			document.getElementById("ejemplo").innerHTML = "<br> &nbsp&nbsp <b>Ejemplo:</b> <br>" +
		'&nbspDELETE FROM jugadores WHERE 0'
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
