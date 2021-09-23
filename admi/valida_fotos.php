<?php

include('../bd/config.php');
include('../bd/conexion1.php');
include_once "../phplogs/errorlogimg.php";
$peso=120;
$prioridad1=1;
$ext=explode(".",$_FILES['img1']['name']);
$extencion=end($ext);

$nom=utf8_decode($_REQUEST["nombre"]);
try{
//$foto1=$_FILES["imagen1"] ["name"]=$nom."01.".$extencion;
//$foto2=$_FILES["imagen2"] ["name"]=$nom."02.".$extencion;
//$foto3=$_FILES["imagen3"] ["name"]=$nom."03.".$extencion;
//$ruta=$_FILES["imagen1"] ["tmp_name"];
//$ruta2=$_FILES["imagen2"] ["tmp_name"];
//$ruta3=$_FILES["imagen3"] ["tmp_name"];

$foto1=$_FILES["img1"] ["name"]=$nom."01.".$extencion;
$foto2=$_FILES["img2"] ["name"]=$nom."02.".$extencion;
$foto3=$_FILES["img3"] ["name"]=$nom."03.".$extencion;
$ruta=$_FILES["img1"] ["tmp_name"];
$ruta2=$_FILES["img2"] ["tmp_name"];
$ruta3=$_FILES["img3"] ["tmp_name"];
$destino="../img/productos/".$foto1;
$destino2="../img/productos/".$foto2;
$destino3="../img/productos/".$foto3;

copy($ruta,$destino);
copy($ruta2,$destino2);
copy($ruta3,$destino3);
mysqli_query($conexion,"INSERT INTO `imagenes`  (nombre, tamano, ruta_web, prioridad) values ('$nom',150,'$destino',1)");
mysqli_query($conexion,"INSERT INTO `imagenes`  (nombre, tamano, ruta_web, prioridad) values ('$nom',150,'$destino2',2)");
mysqli_query($conexion,"INSERT INTO `imagenes`  (nombre, tamano, ruta_web, prioridad) values ('$nom',150,'$destino3',3)");

}

catch(exception $e){




    header("location:fotoindex.php");

}









?>