<?php
 include '../bd/config.php';
 include '../bd/class_mysql.php';
 include '../bd/conexion1.php';
 $alm='Almacenista';
 $ad='Super Administrador';
 $fila2;
session_start();
if(isset($_SESSION['idRolUsuario']) && isset($_SESSION['idUsuario'])){
    $consulta=mysqli_query($conexion,"SELECT us.idUsuario, us.nombreUs, us.apellidosUs, us.emailUs,rou.idRolUsuario, rou.nombreRol FROM usuarios AS us 
    INNER JOIN rolusuario as rou on us.idRolUsuario=rou.idRolUsuario WHERE us.idRolUsuario ='$_SESSION[idRolUsuario]' and us.idUsuario='$_SESSION[idUsuario]';
    ");

 
    if($_SESSION['idRolUsuario']==1){
        $consultai1=mysqli_query( $conexion,"SELECT us.idUsuario, us.nombreUs, us.apellidosUs, us.emailUs,rou.idRolUsuario, rou.nombreRol FROM usuarios AS us 
        INNER JOIN rolusuario as rou on us.idRolUsuario=rou.idRolUsuario WHERE rou.nombreRol='$alm'");
        
    
    }
    if($_SESSION['idRolUsuario']==2){
        $consultai1=mysqli_query( $conexion,"SELECT us.idUsuario, us.nombreUs, us.apellidosUs, us.emailUs,rou.idRolUsuario, rou.nombreRol FROM usuarios AS us 
        INNER JOIN rolusuario as rou on us.idRolUsuario=rou.idRolUsuario WHERE rou.nombreRol='$ad'");
        
    
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/dash.css">
    <title>Document</title>
</head>
<body>
<?php 

 

 while($fila = mysqli_fetch_array($consulta)){
             


?>
 <div id="datosus"  style="float:right;">

<span id="spannombre" style="color:white;"><?php echo $fila['nombreUs'];?></span>
<span id="spannombre"style="color:white;"><?php echo $fila['apellidosUs'];?></span>

<span id="spanrol"style="color:red;"><?php echo $fila['nombreRol'];?>:</span>
</div>
<?php }?>
    <div class="navigation">
<ul>
<li>
<a href="../index.php">
<span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
<span class="title">Home</span>
</a>
</li>

<li>
<a href="../chat/formchat.php">
<span class="icon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
<span class="title">mensaje</span>
</a>
</li>

<li>
    <a href="formcategorias.php">
    <span class="icon"><i class="fa fa-plus-square" aria-hidden="true"></i></span>
    <span class="title">añadir categoria</span>
    </a>
    </li>

    <li>
        <a href="fotoindex.php">
        <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
        <span class="title">Añadir imagenes</span>
        </a>
        </li>


        <li>
            <a href="formaddproductos.php">
            <span class="icon"><i class="fa fa-gift" aria-hidden="true"></i></span>
            <span class="title">productos</span>
            </a>
            </li>

            <li>
            <a href="formaddprodimg.php">
            <span class="icon"><i class="fa fa-gift" aria-hidden="true"></i></span>
            <span class="title">productos e imagenes</span>
            </a>
            </li>

</ul>


<!--<a><div class="ellogo"> <img src="../img/logo.png" class="logoempresa"></div></a>--->

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