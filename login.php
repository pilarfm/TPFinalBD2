<?php
session_start();
 include "conexion.php";
$usuario=$_POST['usuario'];
$password=$_POST['password'];


$sql="SELECT * FROM usuario WHERE id_usuario='" .$usuario."' and pass= '".$password.  "'";
$res=mysqli_query($link,$sql) or die (mysqli_error($link)); // muestra el error

if(@mysqli_num_rows($res)){
	$u=mysqli_fetch_array($res);
	$_SESSION["usuario"]=$usuario;
	$_SESSION["pass"]=$u["pass"];

		header("location:principal.php");

}
else{
	
	header("location:index.php?op=ERROR");
}
?>
