<?php
include "protec.php";
include "conexion.php";
$usuario=$_SESSION["usuario"];
$bd="BD_" . $usuario;

if (isset($_POST['query'])){
    $query= $_POST['query'];
    //genero las consulta
    $respuesta=null;
    $respuesta = mysqli_query($db_user,$query)or die( mysqli_error($db_user) ); // muestra el error

    //registrar esta consulta  
    $logger = "INSERT INTO logger (id_logger,id_usuario,bd,query) VALUES ('$usuario','$bd','$query')";
	$guardarUser = mysqli_query( $link,$logger)or die( mysqli_error( $link ) ); // muestra el error
}
header("location:principal.php");
?>

