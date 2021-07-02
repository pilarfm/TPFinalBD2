<?php
include "conexion.php";
$usuario = $_POST[ 'usuario' ];
$password = $_POST[ 'password' ];
$nick = $_POST[ 'nick' ];
$email = $_POST[ 'email' ];

if ( $email != null && $nick != null && $usuario != null && $password != null ) {
	$sql1 = "SELECT * FROM usuario WHERE id_usuario='" . $usuario . "'";
	$res1 = mysqli_query( $link, $sql1 )or die( mysqli_error( $link ) ); // muestra el error
	if ( @mysqli_num_rows( $res1 ) ) {
		header( "location:registrase.php?op=EXISTE" );
	} else {
		$query=  " CREATE USER '" . $usuario . "'@'localhost' IDENTIFIED BY '" . $password ."'
		WITH MAX_QUERIES_PER_HOUR 100
		MAX_UPDATES_PER_HOUR 40
		MAX_CONNECTIONS_PER_HOUR 100
		MAX_USER_CONNECTIONS 2 ";
		$res2 = mysqli_query( $link,$query )or die( mysqli_error( $link ) ); // muestra el error
		//crea el usuario de conexion a  localhost 

		$sql2 = "INSERT INTO usuario (id_usuario,pass, nick, email) VALUES ('$usuario','$password','$nick','$email')";
		$res3 = mysqli_query( $link, $sql2 )or die( mysqli_error( $link ) ); // muestra el error
		//ingreso un usaurio en la tabla usaurio

		
		
		
		
		
		header( "location:index.php?op=REGISTRADO" );
		
	}
}
else{ 
	header( "location:registrase.php?op=NULL");
}
?>