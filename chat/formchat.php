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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilochat.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta+Vaani">
    <title>chatsql</title>
</head>
<body onload="ajax();">
<a href="../admi/dashadmi.php"><div class="ellogo"> <img class="logoempresa" src="../img/logo.png"></div></a>



<?php 

 

 while($fila = mysqli_fetch_array($consulta)){
             


?>
 <div id="datos-us">
<span id="spanlog" style="color:yellow;">Usuario logueado</span>
<span id="spannombre" style="color:white;"><?php echo $fila['nombreUs'];?>:</span>
<span id="spannombre"style="color:white;"><?php echo $fila['apellidosUs'];?>:</span>

<span id="spanrol"style="color:red;"><?php echo $fila['nombreRol'];?>:</span>
</div>
<?php }?>













 <div id="contenedor">
 <a  onclick="ocultar();"><img id="apremostrar" src="charla.png"></a>

     <div id="caja-chat">
         <div id="chat">
           
         </div>

         <div id="chat_de">
           
           </div>
     </div>
    
     <form method="POST" action="formchat.php">
     <div class="seleccion">
<select name="para">
<?php

 while($fila2=mysqli_fetch_array ($consultai1)){
?>

<option  value="<?php echo $fila2 ['idUsuario'];?>"><?php echo $fila2['nombreUs'];?> <?php echo $fila2 ['apellidosUs']?></option>

<?php  }
?>
</select>

</div>
     <?php
$consultalgus="SELECT us.idUsuario, us.nombreUs, us.apellidosUs, us.emailUs,rou.idRolUsuario, rou.nombreRol FROM usuarios AS us 
INNER JOIN rolusuario as rou on us.idRolUsuario=rou.idRolUsuario WHERE us.idRolUsuario ='$_SESSION[idRolUsuario]';
";


$ejecutarusu=$conexion->query($consultalgus);

while($fila = $ejecutarusu->fetch_array()):
            
 

?>

          <?php endwhile;?>



        

         <textarea name="mensaje" id="" placeholder=""> </textarea>
       
       
       
       
         <input type="submit" name="enviar" value="Enviar">
        
     </form>
     <?php
     


    if(isset($_POST['enviar']))
     {
        
      
    $de=$_SESSION['idUsuario'];
     
     $para=$_POST['para'];
     $nom=$_SESSION['nombreUs'];
     $mensaje=$_POST['mensaje'];
      
   // $paradb="INSERT INTO pchat (id_de, id_para, mensaje) values ('$de','$para',$mensaje')";
    $paradb="INSERT INTO `chatonline` (id_de, id_para, nombre, mensaje) VALUES ('$de', '$para', '$nom', '$mensaje')";
    $ejecudb=$conexion->query($paradb);


         
    }

    

     ?>
 </div>
 
 


 <a  onclick="mostrar();"><img id="apreocultar" src="charla.png"></a>
<script src="ajaxs.js"></script>

</body>
<?php
}

else{
    header("location:../index.php");
}

?>

</html>