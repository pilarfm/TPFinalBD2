<?php

$cantidad = sizeof($_POST);
echo $cantidad;
$cantidad = $cantidad/2;

for($i=1;$i<=$cantidad;$i++){
    $clave = $clave.$i;
    $valor = $valor.$i;
    $clave = $_POST['.$clave.'];
    $valor = $_POST['.$valor.'];
}

//$clave=$_POST['clave'];
//$valor = $_POST['valor'];
$path = "http://127.0.0.1:3010/postDocuments/";




$data = '"id":"28","name":"pilar"';
list($id,$valor2) = explode(':',$data); 
list($c,$valor2,$c) = explode('"',$valor2);
echo $valor2;

$path = $path.$valor2;
$name = "pilar";
//$consulta = json_encode($consulta);

echo '
<form action="'.$path.'" method="post">
    <textarea name="'.$clave1.'">'.$valor1.'</textarea>
    <button type="submit">Confirmar </button>
</form>
'
?>
