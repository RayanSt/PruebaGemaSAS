<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GEMA SAS</title>
    <link rel="stylesheet" href="public\css\style.css" type="text/css">
</head>
<body>
    <div id="container">
        <div id="wrapper">
            <div class="header">
                    <h1>GEMA SAS</h1>
            </div> 
            <h2>Formulario de carga de información</h2>
            <form action="models/Insert.php" method="POST" enctype="multipart/form-data">
                
                <div class="custom-file">
                    <span id ="title">...examinar</span>
                    <input type="file" id="myfile" name="file" >
                </div>
                <br>
                <button type="submit" >Enviar formulario</button>
            </form>
            <?php
            if(isset($_GET['m'])){
                switch($_GET['m']){
                    case 1:
                        ?>
                        <div class="alert">Error: Archivo vacío</div>
                        <?php
                        break;
                    case 2:
                        ?>
                        <div class="alert">Error: Formato inválido</div>
                        <?php
                        break;
                } 
            }
            ?>
        </div>
        </div>
<script src="public\js\index.js" type="text/javascript"></script>
</body>
</html>