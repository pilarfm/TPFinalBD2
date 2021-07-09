<?php
include "protec.php";
include "conexion.php";
$usuario=$_SESSION["usuario"];
$bd="BD_" . $usuario;

if (isset($_POST['Nombre'])){
    $query= $_POST['Nombre'];
    //genero las consulta

    $respuesta=null;
    echo "<h3>Respuesta</h3>";
    $start = hrtime(true);
    //logger
    $solucion=str_replace ( "'" , "´" , $query);
    $logger = "INSERT INTO logger (id_usuario,bd,query) VALUES ('$usuario','$bd','$solucion')";
	$guardarUser = mysqli_query( $link,$logger)or die( mysqli_error( $link ) ); // muestra el error

    //generar consulta
    $respuesta = mysqli_query($db_user,$query) or die( mysqli_error($db_user) ); // muestra el error

    $id_logger = mysqli_query( $link,"SELECT id_logger FROM `logger` ORDER BY `id_logger` DESC LIMIT 1") or die( mysqli_error( $link ) );
    $valores=mysqli_fetch_array($id_logger);
    $id=$valores['id_logger'];

    if (mysqli_error($db_user)===""){
        $respConsulta="Se ha realizado la consulta de forma existosa";
        echo $respConsulta;
        $cargarResultado = mysqli_query( $link,"UPDATE logger SET resultado='$respConsulta' WHERE id_logger=$id") or die( mysqli_error( $link ) );
    }
    else{
        $cargarResultado = mysqli_query( $link,"UPDATE logger SET resultado='$error' WHERE id_logger=$id") or die( mysqli_error( $link ) );
    }
    $end = hrtime(true);
    echo "<br>";
    echo "<br>";

    
    $split = explode(" ", $query);
    if($split[0]==="SELECT" or $split[0]==="select"  ){
            
        if($tupla = $respuesta->fetch_assoc()){
            //echo "entro aca";
            $atributos = array_keys($tupla);
            $valores = array_values($tupla);
        
            echo '<table border="1" class="table">';
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
    else{
        if($split[0]==="CREATE"){
            if($split[2]==="IF"){
                $limitanteFilas = mysqli_query($db_user,"ALTER TABLE $split[5] MAX_ROWS=300");//or die( mysqli_error($db_user) ); // muestra el error
            }
            else{
                $limitanteFilas = mysqli_query($db_user,"ALTER TABLE $split[2] MAX_ROWS=300");//or die( mysqli_error($db_user) ); // muestra el error
            }
        }
    }
    echo "<br>";
    echo "El tiempo de respuesta es ". ($end - $start) / 1000000; 
    echo " milisegundos";
}
?>