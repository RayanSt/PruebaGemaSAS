<?php
include("../models/Users.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GEMA SAS</title>
    <link rel="stylesheet" href="..\public\css\style.css" type="text/css">
</head>
<body>
    <div id="container">
        <div id="wrapper">
            <div class="header">
                    <h1>GEMA SAS</h1>
            </div> 
            <a style="margin-top: 10px" href="../index.php">&#x3C;&#x3C; Volver</a>
            <h2>Usuarios Activos</h2>
            <table class="table" >
                <thead class="table-header" >
                    <tr>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $array_list = get_usurios_activos();
                        while($row=mysqli_fetch_array($array_list)){
                    ?>
                    <tr>
                        <th><?php echo $row['Email']?></th>
                        <th><?php echo $row['Nombre']?></th>
                        <th><?php echo $row['Apellido']?></th>                                    
                    </tr>
                    <?php 
                        }
                    ?>
                    </tbody>
                </table>
            <h2>Usuarios Inactivos</h2>
            <table class="table">
                <thead class="table-header">
                    <tr>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $array_list = get_usurios_inactivos();
                        while($row=mysqli_fetch_array($array_list)){
                    ?>
                    <tr>
                        <th><?php  echo $row['Email']?></th>
                        <th><?php  echo $row['Nombre']?></th>
                        <th><?php  echo $row['Apellido']?></th>                                    
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
            <h2>Usuarios en Espera</h2>
            <table class="table" >
                <thead class="table-header">
                    <tr>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                    </thead>

                <tbody>
                    <?php
                        $array_list = get_usurios_espera();
                        while($row=mysqli_fetch_array($array_list)){
                    ?>
                    <tr>
                        <th><?php echo $row['Email']?></th>
                        <th><?php echo $row['Nombre']?></th>
                        <th><?php echo $row['Apellido']?></th>                                      
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>