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
        echo $respuesta;
    echo "El tiempo de respuesta es ". ($end - $start) / 1000000; 
    echo " milisegundos";
    echo "<br>";
    //registrar esta consulta  
    $solucion=str_replace ( "'" , "´" , $query);
    echo $solucion;
    $logger = "INSERT INTO logger (id_usuario,bd,query) VALUES ('$usuario','$bd','$solucion')";
	$guardarUser = mysqli_query( $link,$logger) or die( mysqli_error( $link ) ); // muestra el error
}

$split = explode(" ", $query);
if($split[0]==="SELECT"){
        
  if($tupla = $respuesta->fetch_assoc()){
      $atributos = array_keys($tupla);
      $valores = array_values($tupla);
      
      echo '<table border="1">';
      echo "<tr>";
      for ($i=0; $i<count($atributos); $i++){
          echo '<th>';
          echo $atributos[$i];
           echo '</th>';
      }
      echo "</tr>";
      echo "<tr>";
      for ($i=0; $i<count($atributos); $i++){
          echo '<th>';echo $valores[$i]; echo '</th>';
      }
      echo "</tr>";
      while ($tupla =$respuesta->fetch_assoc()) {
          $valores = array_values($tupla);
          echo "<tr>";
          for ($i=0; $i<count($valores); $i++)
          {
              echo '<th>';echo $valores[$i]; echo '</th>';
          }
      }
      echo "</tr>";
      echo "</table>";
  }
  else{
      echo "Es un select vacio";
  }
}
?>