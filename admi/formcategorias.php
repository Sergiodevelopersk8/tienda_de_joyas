

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/alertasproductos.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/metodoeliminar.js"></script>
    
    <title>agregar categoria</title>
</head>
<body>

    <?php
    
    if(isset($_GET['alert']))
    {
        $alert=$_GET['alert'];
        
        switch($alert){
        
        case 1:
    
    ?>



<div class="alert alert-success alertdismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p class="centrarp"><strong>Bien</strong><strong>la  categoria </strong><?php echo utf8_encode($_GET['categoria']);?> se agrego correctamente</p>
</div>
<?php 
   break;
   case 2:
    ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">No se a añadido ninguna categoria perro estupido</p>

  </div>
  <?php
  break;
  case 3:
    ?>
     <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">La categoria <strong><?php echo $_GET['categoria'];?></strong> ya existe perro estupido</p>

  </div>
    <?php
    break;
    case 4:

?>
  
  <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <p class="centrarp"><strong>Bien</strong> la categoria <strong><?php  echo utf8_encode( $_GET['categoriavieja']);?></strong>
     se actualizo correctamente
      por <strong><?php echo utf8_encode ($_GET['categorianueva']);?></strong>  </p>

    </div>
<?php
break;
case 5:


?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">No has actualizado ninguna categoria</p>

  </div>


<?php
   break;

  }
}

?>

 <a href="dashadmi.php"><div class="ellogo"> <img class="logoempresa" src="../img/logo.png"></div></a>
<div class="tcat">  <strong> Añadir  Categorias </strong></div> 
   <div class="formulario">
    <form class="form-horizontal" method="post" action="anadircategorias.php" >
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">categorias</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="categoria" name="categoria">
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Añadir</button>
        </div>
      </div>
    </form>
    </div>

    <div class="mostrarcat">
<?php

include('../bd/config.php');
include('../bd/conexion1.php');
$registros=mysqli_query($conexion,"select * from categoriaproducto  order by idCategoriaProducto desc");
cerrarconexion();
?>

  
  <table class="table table-hover">
<?php
  while($fila=mysqli_fetch_array($registros)){
 ?>
    <tr class="activate" id=<?php echo  $fila['idCategoriaProducto'];?>>
    <td> <strong>   <?php echo utf8_encode($fila['nombreCategoria']);?>   </strong></td>
    <td> <a href="formmodificarcategorias.php?categoriavieja=<?php echo utf8_encode($fila['nombreCategoria']);   ?>" ><button type="button" class="btn btn-success">Editar</button></a></td>

    <td> <a onclick="eliminar('<?php echo utf8_encode ($fila['idCategoriaProducto']);?>')" > <button type="button" class="btn btn-danger">Eliminar</button> </a></td>
  </tr>
  
  <?php
}
?>
  </table>


    </div>
    </body>
    </html>



