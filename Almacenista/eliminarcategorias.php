<?php

//$idcategoriael=$_POST['idcategoria'];
$idcategoria=$_POST['idcategoria'];
include('../bd/config.php');
include('../bd/conexion1.php');
require_once('../phplogs/Log.class.php');
include('../phplogs/funciondelog.php');

date_default_timezone_set("America/Mexico_City");
$fecha=date("d-m-Y h:i a");

$mysqli_query($conexion,"SELECT idCategoriaProducto, nombreCategoria FROM `categoriaproducto` WHERE idCategoriaProducto='$idcategoriael'");

$mensaje="la  categoria eliminada fue ".' '.$uno.' '."con la fecha ".' '.$fecha;

$Log= new Log();
$Log->Write('../phplogs/categoriaborrada.txt',$mensaje);
echo $Log->Read('../phplogs/categoriaborrada.txt');
   

mysqli_query($conexion,"delete from categoriaproducto where idCategoriaProducto='$idcategoria'");




cerrarconexion();




?>