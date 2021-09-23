<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INFINITY GEMS JEWELRY</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleChat.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery.convform.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="vendors/jquery/jquery.convform.js"></script>
    <script type="text/javascript" src="vendors/jquery/custom.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
<body>
  <?php
    include_once "bd/class_mysql.php";
    include_once "menu.php";
    $modulo= MysqlQuery::Request('modulo');
    $paginas = ['',"",'inicio', 'productosMujeres', 'productosHombres', 
               'productos', 'detalleProducto', 'ofertas', 'contacto', 
               'carrito', 'pagar', 'confirmarPago', 'login', 'registrarse', 'olvidoPass'];
    $vale = in_array($modulo,$paginas);
    if($vale != 1){
      $modulo = "error404";
    }

    if($modulo=="inicio" || $modulo==""){
      include_once "inicio.php";
    }
    if($modulo=="productosMujeres"){
      include_once "productosMujeres.php";
    }
    if($modulo=="productosHombres"){
      include_once "productosHombres.php";
    }
    if($modulo=="productos"){
      include_once "productos.php";
    }
    if($modulo=="detalleProducto"){
      include_once "detalleProducto.php";
    }
    if($modulo== "ofertas"){
      include_once "ofertas.php";
    }
    if($modulo=="contacto"){
      include_once "contacto.php";
    }
    if($modulo=="carrito"){
      include_once "carrito.php";
    }
    if($modulo=="pagar"){
      include_once "pagar.php";
    }
    if($modulo=="confirmarPago"){
      include_once "confirmarPago.php";
    }
    if($modulo=="login"){
      include_once "login.php";
    }
    if($modulo=="registrarse"){
      include_once "registrarse.php";
    }
    if($modulo=="olvidoPass"){
      include_once "olvidoPass.php";
    }
    if($modulo == "error404"){
      include_once "error404.php";
    }
    include_once "chat.php";
    include_once "footer.php";
  ?>


  <!-- <script src="vendors/jquery/jquery-3.2.1.min.js"></script> -->
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/nouislider/nouislider.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/jquery.form.js"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  <script src="js/tiendaJoyas.js"></script>

</body>
</html>

