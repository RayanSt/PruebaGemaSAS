<?php
include("../config/conexion.php");


function insertar($usuario){   
    $con=conectar();     
    for($i=0;$i<=sizeof($usuario)-1;$i++){
        $email=$usuario[$i][0];
        $nombres=$usuario[$i][1];
        $apellidos=$usuario[$i][2];
        $Codigo=$usuario[$i][3];
        $sql="INSERT INTO tm_usuarios VALUES('$email','$nombres','$apellidos','$Codigo')";
        $query= mysqli_query($con,$sql);
    }     
}

function get_usurios_activos(){
    $con=conectar();
    $sql="SELECT Email,Nombre,Apellido FROM tm_usuarios WHERE Codigo = 1";
    return $query = mysqli_query($con,$sql);
}

function get_usurios_inactivos(){
    $con=conectar();
    $sql="SELECT Email,Nombre,Apellido,Codigo FROM tm_usuarios WHERE Codigo = 2";
    return $query = mysqli_query($con,$sql);
}

function get_usurios_espera(){
    $con=conectar();
    $sql="SELECT Email,Nombre,Apellido FROM tm_usuarios WHERE Codigo = 3";
    return $query = mysqli_query($con,$sql);
}
?>