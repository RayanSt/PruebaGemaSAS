<?php
include("../config/conexion.php");


function insertar($usuario){   
    $con=conectar();     
    for($i=0;$i<=sizeof($usuario)-1;$i++){
        $email=$usuario[$i][0];
        $nombres=$usuario[$i][1];
        $apellidos=$usuario[$i][2];
        $Codigo=$usuario[$i][3];
        $Revisor=$usuario[$i][4];
        $sql="INSERT INTO tm_usuarios VALUES('$email','$nombres','$apellidos','$Codigo','$Revisor')";
        $query= mysqli_query($con,$sql);
    }     
}

function get_usurios_activos(){
    $con=conectar();
    $sql="SELECT u.Email AS email,u.Nombre AS nombre,u.Apellido AS apellido,r.apellido AS revisor FROM tm_usuarios u JOIN revisores r ON u.Revisor=r.id AND u.Codigo = 1";
    return $query = mysqli_query($con,$sql);
}

function get_usurios_inactivos(){
    $con=conectar();
    $sql="SELECT u.Email AS email,u.Nombre AS nombre,u.Apellido AS apellido,r.apellido AS revisor FROM tm_usuarios u JOIN revisores r ON u.Revisor=r.id AND u.Codigo = 2";
    return $query = mysqli_query($con,$sql);
}

function get_usurios_espera(){
    $con=conectar();
    $sql="SELECT u.Email AS email,u.Nombre AS nombre,u.Apellido AS apellido,r.apellido AS revisor FROM tm_usuarios u JOIN revisores r ON u.Revisor=r.id AND u.Codigo = 3";
    return $query = mysqli_query($con,$sql);
}
?>