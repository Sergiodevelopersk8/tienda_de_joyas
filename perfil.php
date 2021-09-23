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
    include_once "menu.php";
    if(isset($_SESSION["active"])){
    include_once "bd/class_mysql.php";
  ?>
  
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Mi perfil</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Mi perfil</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        <div class="returning_customer">
        <div class="billing_details">
            <div class="row">
            <div class="col-lg-8">
            </div>
                <?php if(isset($_SESSION['idDireccion'])){?>
                <div class="col-lg-8" id="siDirección">
                    <h3>Dirección de envio</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group p_star">
                            <label for="f-option4">&nbsp;Nombre completo de quien recibe el producto</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['nombreUs'].'&nbsp;'.$_SESSION['apellidosUs'];?>" placeholder="Nombre completa de la persona que recibe" id="nomNuevo" name="nomNuevo" disabled>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="f-option4">&nbsp;Ciudad</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['ciudad'];?>" placeholder="Ciudad" id="ciudadN" name="name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="f-option4">&nbsp;Código Postal</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['cPostal'];?>" placeholder="Código Postal / ZIP" id="codPosN" name="name">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="f-option4">&nbsp;Colonia</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['colonia'];?>" placeholder="Colonia" id="coloniaN" name="company" placeholder="Company name">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="f-option4">&nbsp;Calle principal</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['calle'];?>" placeholder="Calle principal" id="callePN" name="company" placeholder="Company name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="f-option4">&nbsp;Entrecalle #1</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['entreCalle'];?>" placeholder="Entrecalle #1" id="entrecalleN" name="number">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="f-option4">&nbsp;Entrecalle #2</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['entreCallee'];?>" placeholder="Entrecalle #2" id="entrecalleeN" name="compemailany">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="f-option4">&nbsp;Numero de casa (si no tiene colocar S/N)</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['numeroCasa'];?>" placeholder="Número de casa" id="numCasaN" name="number">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="f-option4">&nbsp;Número de teléfono del receptor de producto</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['telefonoUs'];?>" placeholder="Número de teléfono de quien recibe" id="numTelN" name="compemailany">
                        </div>
                        <div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <h3>Detalles del hogar</h3>
                            </div>
                            <textarea class="form-control" name="message" id="messageN" rows="1" placeholder="Escribe una pequeña descripción del hogar (color, tamaño, maerial de construcción) ..."><?php echo $_SESSION['descripcion'];?></textarea>
                        </div>
                        <div class="col-md-12 form-group p_star">
                        </br><div class="">
                                <h3>Tarjeta de crédito</h3>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['nombreUser'].'&nbsp;'.$_SESSION['apellidosUs'];?>" placeholder="Nombre completo de la tarjeta" id="nomCCN" name="add1">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['numCC'];?>" placeholder="Número de tarjeta de crédito" id="numCC" name="numCC">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="date" class="form-control" value="" placeholder="Fecha de vencimiento" id="fechaExpN" name="fechaExpN">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" value="" placeholder="Código de seguridad (3 digitos)" id="codSegN" name="codSegN">
                            </div>
                        </div>
                    </form>
                </div>
                <?php }?>

                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Mis datos</h2>
                        <ul class="list">
                            <img src="https://i.pinimg.com/474x/83/a9/a1/83a9a144ab03763667b8d8aa381bb441.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                        </ul><br>
                        <ul class="list list_2">
                            <li><input type="text" class="form-control" value="<?php echo $_SESSION['nombreUs'];?>" placeholder="Nombre" id="nomUsN" name="nomUsN"></li><br>
                            <li><input type="text" class="form-control" value="<?php echo $_SESSION['apellidosUs'];?>" placeholder="Apeliidos" id="apellUsN" name="apellUsN"></li><br>
                            <li><input type="text" class="form-control" value="<?php echo $_SESSION['emailUs'];?>" placeholder="Email" id="emailUsN" name="emailUsN"></li><br>
                            <li><input type="text" class="form-control" value="<?php echo $_SESSION['telefonoUs'];?>" placeholder="Número de teléfono" id="telUsN" name="telUsN"></li><br>
                            <li><input type="password" class="form-control" value="<?php echo $_SESSION['contrasenaUs'];?>" placeholder="Contraseña" id="passUsN" name="passUsN"></li>
                            <li><input type="checkbox" id="verPP" name="verPP" ><label for="f-option4">&nbsp;Ver contraseña</label></li>
                        </ul>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">He leido y acepto los </label>
                            <a href="#" data-toggle="modal" data-target="#exampleModalLong">terminos y condiciones*</a>
                        </div>
                        <div class="text-center">
                          <a class="button button-paypal" id="actualizaPerfil" data-idu="<?php echo $_SESSION['idUsuario'];?>"   href="#">Actualizar datos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->
  <?php
    include_once "chat.php";
    include_once "footer.php";
    } else{ 
        include_once "error404.php";
    }
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

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" style="z-index: 10000;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Términos y Condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse ad quas exercitationem. Magnam perspiciatis corporis, neque odio fuga nisi, aliquam praesentium dolore doloribus eligendi quo minus facilis qui fugiat.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse ad quas exercitationem. Magnam perspiciatis corporis, neque odio fuga nisi, aliquam praesentium dolore doloribus eligendi quo minus facilis qui fugiat.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse ad quas exercitationem. Magnam perspiciatis corporis, neque odio fuga nisi, aliquam praesentium dolore doloribus eligendi quo minus facilis qui fugiat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

