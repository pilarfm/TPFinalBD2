<?php 
////pasdsad
    if (isset($_SESSION['usuario'])){
        $base= 'bd_'. $_SESSION['usuario'];
        $db_user = new mysqli('localhost', $_SESSION['usuario'], $_SESSION['pass'], $base, 3306); //Base del usuario
        $db_principal = new mysqli('localhost','root','','prueba'); //Base principal del sistema
    }
    else{
    $link = new mysqli('localhost','root','','prueba');
    $link->set_charset('utf8');
    }
?>