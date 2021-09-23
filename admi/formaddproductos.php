<?php
include('../bd/config.php');
include('../bd/conexion1.php');

session_start();

if(isset($_SESSION['idRolUsuario']))
{


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    <title>Document</title>
</head>
<body>
<a href="dashadmi.php"><div class="ellogo"> <img class="logoempresa" src="../img/logo.png"></div></a>




<div id="formulario">
<form method="POST" action="addproductos.php" >
<span id="textoinput">Nombre del producto</span>
<input type="text" name="nombreprod" placeholder="Nombre" id="nombre">

<span> <p  id="textoinput">Costo</p></span>
<input type="number"  name="costoprod" placeholder="costo" id="nombre">

<span> <p  id="textoinput">Precio </p></span>
<input type="number"  name="precio" placeholder="precio" id="nombre">

<span> <p  id="textoinput">Descripción</p></span>
<textarea  name="descripcion" id="nombre" > </textarea>

<span> <p  id="textoinput">Existencia</p></span>
<input type="number"  name="existencia" placeholder="existencia" id="nombre">

<span> <p  id="textoinput">Marca del producto</p></span>
<input type="text" name="marcaprod" placeholder="marca" id="nombre">


<span> <p  id="textoinput">Material del producto</p></span>
<input type="text" name="materialprod" placeholder="material" id="nombre">


<span> <p  id="textoinput">Tipo de persona</p></span>
<input type="text" name="tipopersona" placeholder="para que genero hombre o mujer" id="nombre">


<span> <p  id="textoinput">Oferta del producto</p></span>
<input type="text" name="oferta" placeholder="oferta" id="nombre">

<div class="select">
<select name="icategoriaproducto">
<option value="hide">-- categorias --</option>


<?php
$consultaproducto=mysqli_query($conexion,"SELECT * FROM `categoriaproducto`");
while($filacatprod=mysqli_fetch_array($consultaproducto)){
?>
<option value="<?php echo $filacatprod ['idCategoriaProducto'];?>"><?php echo $filacatprod['nombreCategoria'];?></option>
<?php } ?>
</select>
</div>



<div class="select2">

<select name="iprovedor">
<option>provedor</option>
<?php
$consultaprove=mysqli_query($conexion,"SELECT * FROM `proveedor`");
while($filaprove=mysqli_fetch_array($consultaprove)){
?>
<option value="<?php echo $filaprove ['idProveedor'];?>"><?php echo $filaprove['nombreProv'];?></option>
<?php } ?>
</select>
</div>
<input type="submit" name="enviar" value="Enviar" id="enviar">

</form>
</div>




</body>
</html>



<?php
}
else
{
    header("location:../index.php");
}

?>