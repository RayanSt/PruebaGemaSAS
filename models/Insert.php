<?php
include("Users.php");
$fichero= $_FILES["file"];
$myfile = fopen($fichero["tmp_name"], "r");
$est = true;
$usuarios = [];
while(!feof($myfile)){
    $lineas = fgets($myfile);
    $arreglo = explode(",",$lineas);
    //validar que el formato corresponda
    if(is_null($arreglo[0]) || is_null($arreglo[3]) || ($arreglo[3] < 0 || $arreglo[3] > 3)){
        $est = false;
    }
    array_push($usuarios,$arreglo);
}

if(sizeof($usuarios)==1 && is_null($usuario[0][0])){
    header('Location:'.route().'index.php?m=1');
}

if ($est) { 
    insertar($usuarios);
    header('Location:'.route().'view/Visualization.php');
    
}else{
    header('Location:'.route().'index.php?m=2');
}
fclose($myfile);
?>