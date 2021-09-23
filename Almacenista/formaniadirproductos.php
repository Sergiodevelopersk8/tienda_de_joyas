
<?php
include('../bd/config.php');
include('../bd/conexion1.php');
$registros=mysqli_query($conexion,"select * from categoriaproducto order by idCategoriaProducto desc");
cerrarconexion();


?>


<!DOCTYPE html>
<html lang="es">
<head>
   
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprventas</title>
    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!--font oswald-->

   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
   
<!--boostrap-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->

  <script src="js/alertasproductos.js"></script>

    
    
    
    

    <link rel="stylesheet" href="css/productos.css">
</head>

<body>



   
  <div class="tcat">  <strong> Añadir  Productos </strong></div> 
  <div class="formulario">
  <form class="form-horizontal" name="formproductos" method="post" enctype="multipart/form-data"    id="form">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
          <input onkeyup="validadonombre()" type="text" class="form-control" id="inputEmail3" placeholder="Nombre del producto" name="nombre">
        </div>
      </div>
      
<!--alert nombre-->
<div class="alert alert-danger alert-dismissible ocultar" role="alert" id="avisonombre" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">No se a añadido ningun nombre perro estupido</p>

  </div>
<!--fin alert nombre-->

<!--input precio-->
<div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">precio</label>
        <div class="col-sm-10">
          <input onkeyup="validadoprecio()" type="float" class="form-control" id="inputEmail3" placeholder="Precio del producto" name="precio">
        </div>
      </div>

<!--fin precio input-->

      
<!--alert precio-->
<div class="alert alert-danger alert-dismissible ocultar" role="alert" id="avisoprecio" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">No se a añadido ningun precio perro estupido</p>

  </div>
<!--fin alert precio-->


<!--input descripcion-->
<div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">descripcion</label>
        <div class="col-sm-10">
          <textarea onkeyup="validadodescripcion()" class="form-control" rows="3" placeholder="descripcion del producto" name="descripcion"></textarea>
          
        </div>
      </div>

<!--fin  descripcion-->

      
<!--alert descripcion-->
<div class="alert alert-danger alert-dismissible ocultar" role="alert" id="avisodescripcion" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">No se a añadido ninguna descripcion perro estupido</p>

  </div>
<!--fin alert descripcion-->







<!--input categoria-->
<div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">categoria</label>
        <div  class="col-sm-10">
          <select class="form-control"  onkeyup="validadocategoria()" placeholder="categoria del producto" name="categorias" >

<?php  while($fila = mysqli_fetch_array($registros)){ ?>
          <option value="<?php echo $fila ['idCategoriaProducto'];?>"><?php echo utf8_encode($fila['nombreCategoria']);?></option>
<?php }?>
          </select>
          
        </div>
      </div>

<!--fin  categoria-->

      
<!--alert categoria-->
<div class="alert alert-danger alert-dismissible ocultar" role="alert" id="avisocategorias" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">No se a añadido ninguna categoria perro estupido <strong><a target="blank" href="../categorias/formcategorias.php">añade una categoria si no hay nada registrado</a></strong></p>

  </div>
<!--fin alert categoria-->


<!--mensaje de error nombre repetido-->
<div class="alert alert-danger alert-dismissible ocultar" role="alert" id="nombrerepetido">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">el nombre se repitio</p>

  </div>

  <!----->

  <!--error de imagen-->
<div class="alert alert-danger alert-dismissible ocultar" role="alert" id="errorimagen">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
  </button>
  <p class="centrarp">error de imagen</p>

  </div>

<!--barra de carga-->

    
<div class="ocultar" id="contenedor_carga">
    <div id="carga"></div>
</div>

<!--barra de carga-->


  <!-- campo imagenes -->
  <div style="margin-left:355px; margin-top:20px;">
  <button onclick="mostrar()" type="button" class="btn btn-success">Añadir alguna imagen</button>
  <div class="ocultar" id="unaimg">  
<div class="form-group">
    <label for="exampleInputFile">Imagen 1 (principal)</label>
    <input type="file" name="imagen1">
    
  </div>
  
<div class="form-group">
    <label for="exampleInputFile">Imagen 2 (secundaria)</label>
    <input type="file" name="imagen2">
    
  </div>
  
<div class="form-group">
    <label for="exampleInputFile">Imagen 3 (secundaria)</label>
    <input type="file" name="imagen3">
    <p class="help-block"><strong>Solo se admiten archivos .jpg, .jpeg, ,gif y .png menores de 1MByte </strong></p>
  </div>
</div>
</div>
  <!--fin de lacarga de imagenes-->
<!--exito mensaje-->
<div class="alert alert-success alert-dismissible ocultar" role="alert" id="exito">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <p class="centrarp"><strong>Bien se agrego correctamente</p>

    </div>
<!--fin exito mensaje-->

<!--mensaje de error fin nombre repetido-->
<!--formulario-->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button onclick="validarformulario()" type="button" class="btn btn-primary">Añadir</button>
          
        </div>
      </div>
    </form>
    </div>
    
     <script type="text/javascript">
   
</script>
   
</body>
</html>



