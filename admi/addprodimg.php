<?php

include('../bd/config.php');
include('../bd/conexion1.php');
session_start();
$ipro=$_POST['idprod'];
$img1=$_POST['img1'];
$img2=$_POST['img2'];
$img3=$_POST['img3'];

if(isset($_SESSION['idRolUsuario']) && isset($_SESSION['idUsuario']))
{
    if(isset($_POST['enviar'])){
    $paradb=mysqli_query($conexion,"INSERT INTO `productosimg`(`idProducto`, `idImagen`) VALUES  ($ipro,$img1)");
    $paradb2=mysqli_query($conexion,"INSERT INTO `productosimg`(`idProducto`, `idImagen`) VALUES ($ipro,$img2)");
    $paradb3=mysqli_query($conexion,"INSERT INTO `productosimg`(`idProducto`, `idImagen`) VALUES ($ipro,$img3)");
   

    header("location:formaddprodimg.php");   
}

}

else
{
    header("location:../index.php");
}

?>