<?php
session_start();
include('../bd/config.php');
include('../bd/conexion1.php');
if(isset($_POST['nombre'])){
    sleep(1);
    $nombre=utf8_decode($_POST['nombre']);
    $precio=utf8_decode($_POST['precio']);

    $descripcion=utf8_decode($_POST['descripcion']);
    $categorias=utf8_decode($_POST['categorias']);

   


$registros=mysqli_query($conexion,"select nombre from productos where nombre='$nombre'");
if(mysqli_num_rows($registros)==0){
   $tamano = 120;
    //zona de imagen
    //imagen 1
   
//if($_FILES['imagen1']['size']!=0){
    if($_FILES['imagen1']['size']!=""){
    $ext=explode(".",$_FILES['imagen1']['name']);
    $extencion=end($ext);
    $_FILES['imagen1']['name']=$nombre."_ 01.".$extencion; 
    $variablejpg="image/jpg";
    $variablepng="image/png";
    $variablejpeg="image/jpeg";
    $variablegif="image/gif";
    $permitidos=array($variablejpg,$variablepng,$variablejpeg,$variablegif); 
    $limite_kb=1000;
    if(in_array($_FILES['imagen1']['type'],$permitidos)&& $_FILES['imagen1']['size']<=$limite_kb*1024){ 
        $ruta="../img/productos/".$_FILES['imagen1']['name']; 
        $resultado=move_uploaded_file($_FILES['imagen1']['tmp_name'],$ruta);
        echo "seinserto";
        echo "exito";
     }
     else
     {
          echo "errorimagen";
          exit();
    }
}

//imagen 2 el time remplazo $nombre

if($_FILES['imagen2']['size']!=""){
    $ext=explode(".",$_FILES['imagen2']['name']);
    $extencion=end($ext);
    $_FILES['imagen2']['name']=$nombre."_ 02.".$extencion; 
    $variablejpg="image/jpg";
    $variablepng="image/png";
    $variablejpeg="image/jpeg";
    $variablegif="image/gif";
    $permitidos=array($variablejpg,$variablepng,$variablejpeg,$variablegif); 
    $limite_kb=1000;
    if(in_array($_FILES['imagen2']['type'],$permitidos)&& $_FILES['imagen2']['size']<=$limite_kb*1024){ 
        $ruta="../img/productos/".$_FILES['imagen2']['name']; 
        $resultado=move_uploaded_file($_FILES['imagen2']['tmp_name'],$ruta);
        echo "seinserto";
        echo "exito";
     }
     else
     {
          echo "errorimagen";
          exit();
    }
}

//imagen 3

if($_FILES['imagen3']['size']!=""){
    $ext=explode(".",$_FILES['imagen3']['name']);
    $extencion=end($ext);
    $_FILES['imagen3']['name']=$nombre."_ 03.".$extencion; 
    $variablejpg="image/jpg";
    $variablepng="image/png";
    $variablejpeg="image/jpeg";
    $variablegif="image/gif";
    $permitidos=array($variablejpg,$variablepng,$variablejpeg,$variablegif); 
    $limite_kb=1000;
    if(in_array($_FILES['imagen3']['type'],$permitidos)&& $_FILES['imagen3']['size']<=$limite_kb*1024){ 
        $ruta="../img/productos/".$_FILES['imagen3']['name']; 
        $resultado=move_uploaded_file($_FILES['imagen3']['tmp_name'],$ruta);
        echo "seinserto";
        echo "exito";
     }
     else
     {
          echo "errorimagen";
          exit();
    }
}

mysqli_query($conexion,"insert into productos (nombre,precio,descripcion,id_categoria) values ('$nombre','$precio','$descripcion','$categorias')");
$registros=mysqli_query($conexion,"select id_producto from productos where nombre='$nombre'");
$fila=mysqli_fetch_array($registros); 

if($_FILES['imagen1']['size']!=""){
    $nombreimagen1=$_FILES['imagen1']['name'];


    mysqli_query($conexion,"insert into imagenes (nombre,tamano, ruta_web, prioridad) 
    values ('$nombreimagen1','1','$fila[id_producto]')");
    echo "exito";
    echo "seinserto";
}

if($_FILES['imagen2']['size']!=""){

    $nombreimagen2=$_FILES['imagen2']['name'];


    mysqli_query($conexion,"insert into imagenes (nombre,prioridad,id_producto) 
    values ('$nombreimagen2','2','$fila[id_producto]')");
    echo "exito";
    echo "seinserto";

}

if($_FILES['imagen3']['size']!=""){

    $nombreimagen3=$_FILES['imagen3']['name'];


    mysqli_query($conexion,"insert into imagenes (nombre,prioridad,id_producto) 
    values ('$nombreimagen3','3','$fila[id_producto]')");
    echo "exito";
    echo "seinserto";

}


echo "exito";
echo "seinserto";
cerrarconexion();

        
       
}


    else {
        echo "nombrerepetido";
        exit();
    }
}

else{
    header('location:../index.html');
}
?>
