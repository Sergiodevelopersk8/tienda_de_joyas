<?php
include('../bd/config.php');
include('../bd/conexion1.php');
require_once('../phplogs/Log.class.php');
include('../phplogs/funciondelog.php');

date_default_timezone_set("America/Mexico_City");
$fecha=date("d-m-Y h:i a");


if($_POST['categoria'] !="")
{

    
    $categoria=utf8_decode($_POST['categoria']);
    $registros=mysqli_query($conexion,"select nombreCategoria from categoriaproducto where nombreCategoria='$categoria'");
    if(mysqli_num_rows($registros)==0)
    {
        mysqli_query($conexion,"INSERT INTO categoriaproducto  (nombreCategoria ) values('$categoria')");
        $mensaje="la nueva categoria añadida es ".' '.$categoria.' '."con la fecha ".' '.$fecha;
      
        cerrarconexion();




        header('location:formcategorias.php?alert=1&categoria='.$categoria);
        $Log= new Log();
        $Log->Write('../phplogs/addcategoria.txt',$mensaje);
        echo $Log->Read('../phplogs/addcategoria.txt');
    }

    else{
        header('location:formcategorias.php?alert=3&categoria='.$categoria);

    }

    }

    else if($_POST['categoria']=="")
    {
        header('location:formcategorias.php?alert=2');
}

else
{
    header('location:dashadmi.php');

}


?>
