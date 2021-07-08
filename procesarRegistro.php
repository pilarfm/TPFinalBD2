<?php
include "protec.php";
include "conexion.php";
$usuario=$_SESSION["usuario"];

$mostrar = "SELECT query,resultado,fecha,hora FROM logger l WHERE l.id_usuario='$usuario' ORDER by l.id_logger "; 
	$mostrarHistorial = mysqli_query( $link,$mostrar) or die( mysqli_error( $link ) ); // muestra el error 
    echo '<table border="1" class="table">';
            echo "<tr style='background: #98cfff'>";
                echo "<th>";
                    echo "Consultas ";
                echo "</th>";
                echo "<th>";
                    echo "Resultado ";
                echo "</th>";
                echo "<th>";
                    echo "Fecha";
                echo "</th>";
                echo "<th>";
                    echo "Hora ";
                echo "</th>";
            while($valores=mysqli_fetch_array($mostrarHistorial)) {
                echo "<tr>";
                echo '<th>';echo $valores['query']; echo '</th>';
                echo '<th>';echo $valores['resultado']; echo '</th>';
                echo '<th>';echo $valores['fecha']; echo '</th>';
                echo '<th>';echo $valores['hora']; echo '</th>';
                echo '</tr>';
                }
        echo "</table>";
?>