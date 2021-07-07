<?php
include "protec.php";
include "conexion.php";
$usuario=$_SESSION["usuario"];
$bd="BD_" . $usuario;

if (isset($_POST['query'])){
    $query= $_POST['query'];
    //genero las consulta

    $respuesta=null;
    $start = hrtime(true);
    $respuesta = mysqli_query($db_user,$query) or die( mysqli_error($db_user) ); // muestra el error
    $end = hrtime(true);
    echo "El tiempo de respuesta es ". ($end - $start) / 1000000; 
    echo " milisegundos";
    echo "<br>";
    //registrar esta consulta  
    $solucion=str_replace ( "'" , "´" , $query);

    $logger = "INSERT INTO logger (id_usuario,bd,query) VALUES ('$usuario','$bd','$solucion')";
	$guardarUser = mysqli_query( $link,$logger) or die( mysqli_error( $link ) ); // muestra el error
}

$split = explode(" ", $query);
echo $split[0]; // porción1
echo "<br>";

if($split[0]==="SELECT"){
    $respuesta
    ?>
    <table>
    <tr>
      <th>respuesta</th>
      <th>Apellido</th>
    </tr>
    <?php 
}

?>
<a href="principal.php">volver a consulta </a>