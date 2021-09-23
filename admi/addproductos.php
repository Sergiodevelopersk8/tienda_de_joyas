<?php
include('../bd/config.php');
include('../bd/conexion1.php');
require_once('../phplogs/Log.class.php');
include('../phplogs/funciondelog.php');

session_start();

if(isset($_SESSION['idRolUsuario']))
{

    if(isset( $_POST['enviar'])){

$nombreprod= utf8_decode($_POST['nombreprod']);
$costoprod=$_POST['costoprod'];
$precioprod=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$existencia=$_POST['existencia'];
$marca=utf8_decode($_POST['marcaprod']);
$material=utf8_decode($_POST['materialprod']);
$tipopersona=utf8_decode($_POST['tipopersona']);
$oferta=$_POST['oferta'];
$idcatprod=$_POST['icategoriaproducto'];
$idprove=$_POST['iprovedor'];

if($oferta=="Si" || $oferta=="si" || $oferta=="No"){
$registros=mysqli_query($conexion,"INSERT INTO `productos` (`nombreProd`, `costoProd`, `precioProd`, `descripcionProd`, `existenciaProd`, `marcaProd`, `materialProducto`, `tipoPersona`, `oferta`, `idCategoriaProducto`, `idProveedor`) VALUES('$nombreprod', '$costoprod', '$precioprod', '$descripcion', '$existencia', '$marca', '$material', '$tipopersona', '$oferta', '$idcatprod', '$idprove')");
header("location:formaddproductos.php");    

}   
}



}









?>