<?php

$consulta=$_POST['text-area-entrada'];
//$password=$_POST['password'];

echo $consulta;

if (strpos($consulta, 'insert') == true)
    header("location: principal.php?fallo=insert");
else 
    if (strpos($consulta, 'update') == true)
    header("location: principal.php?fallo=update");
    else
    if (strpos($consulta, 'select') == true)
    header("location: principal.php?fallo=select");
        else
        if (strpos($consulta, 'delete') == true)
        header("location: principal.php?fallo=delete");
        else
            header("location: principal.php?fallo=error");

?>