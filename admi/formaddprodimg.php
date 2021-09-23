<?php
include('../bd/config.php');
include('../bd/conexion1.php');

$consultaprod=mysqli_query($conexion,"SELECT * FROM productos");
$consultaimg=mysqli_query($conexion,"SELECT * FROM imagenes");
$consultaimg2=mysqli_query($conexion,"SELECT * FROM imagenes");
$consultaimg3=mysqli_query($conexion,"SELECT * FROM imagenes");



$consultaprodimg=mysqli_query($conexion,"SELECT * FROM productosimg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/addproimgcss.css">
    <title>Document</title>
</head>
<body>

<a href="dashadmi.php"><div class="ellogo"> <img class="logoempresa" src="../img/logo.png"></div></a>

   <form method="POST" action="addprodimg.php">
      <div class="select">
   <select name="idprod" id="" >
   <option value="hide">-- Producto --</option>
   <?php
   
   while($filapro=mysqli_fetch_array($consultaprod)){
   
   ?>
   
   <option value="<?php echo $filapro['idProducto']; ?>"><?php echo $filapro['nombreProd']; ?></option>

   <?php } ?>
   </select>
   </div>
   <div class="select1">
   <select name="img1" id="">
   <option value="hide">-- imagen 1 --</option>
   <?php
   
while($filaimg1=mysqli_fetch_array($consultaimg)){

   ?>
   <option value="<?php echo $filaimg1 ['idImagen'];?>"> <?php echo $filaimg1['nombre'];?></option>
<?php } ?> 

   </select>
   </div>
   
   <div class="select2">

   <select name="img2" id="">
   <option value="hide">-- imagen 2 --</option>
   <?php
   
while($filaimg2=mysqli_fetch_array($consultaimg2)){

   ?>
   <option value="<?php echo $filaimg2 ['idImagen'];?>"> <?php echo $filaimg2['nombre'];?></option>
<?php } ?> 

   </select>
   </div>

   <div class="select3">
   <select name="img3" id="">
   <option value="hide">-- imagen 3 --</option>
   <?php
   
while($filaimg3=mysqli_fetch_array($consultaimg3)){

   ?>
   <option value="<?php echo $filaimg3 ['idImagen'];?>"> <?php echo $filaimg3['nombre'];?></option>
<?php } ?> 

   </select>
   </div>
   <input type="submit" name="enviar" value="Enviar"  id="enviar">
   
   </form> 

<?php
/*
$img1=$_POST['img1'];
if(isset($_POST['enviar'])){
$consultaimgt=mysqli_query($conexion,"SELECT ruta_web FROM imagenes where nombre = '$img1'");



foreach($consultaimgt as $ss) {
  */
?>
<!---<img src="<?php //echo $ss['ruta_web']?>">--->
<?php/*
}
}*/

?>
</body>
</html>