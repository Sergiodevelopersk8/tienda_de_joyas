<?php
include('../bd/config.php');
include('../bd/conexion1.php');
$registros=mysqli_query($conexion,"select * from categoriaproducto order by idCategoriaProducto desc");
cerrarconexion();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="valida_fotos.php" method="POST" enctype="multipart/form-data">

<p>Nombre:</p>
<input type="text" name="nombre" value="">
<br>
<br>
<br>
<input type="file" name="imagen1" id="imagen1">
<br>
<br>
<br>
<input type="file" name="imagen2" id="imagen2">
<br>
<br>
<br>
<input type="file" name="imagen3" id="imagen3">
<br>
<input type="submit" name="enviar" value="Enviar">    
    
    
    </form>
</body>
</html>