<?php
function conectar(){
    $bdh="gema";
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,$bdh);
    return $con;
}

function route(){
    return "../../PruebaGemaSAS/";
}
?>